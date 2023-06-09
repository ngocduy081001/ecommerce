<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryReqest;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Resources\CategoryCollection;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    public function __construct()
    {
        $this->category = new Category();
    }

    public function index(Request $request)
    {

        confirmDelete(config('message.title_delete'), config('message.delete_sweet_alert'));
        return view('server.page.category.grid')->with('data', $this->category->with('parentItem')->paginate(10));
    }

    public function recursiveCategory($data, $result = [])
    {
        foreach ($data as $key => $item) {
            $result[$key] = [
                'id' => $item['id'],
                'title' => $item['name'],
            ];
            if (count($item['children'])) {
                $result[$key]['subs'] =  self::recursiveCategory($item['children']);
            }
        }
        return $result;
    }
    public function create()
    {
        $category = $this->category->where('parent', 0)->with('children')->get()->toArray();
        $result = self::recursiveCategory($category);
        array_push($result, ['id' => 0, 'title' => 'root']);
        return view('server.page.category.create', compact('result'));
    }
    public function store(CategoryReqest $request)
    {
        $this->category->create($request->all());
        alert()->success('Title', config('message.post_success'));
        return view('server.page.category.grid');
    }
    public function edit($id)
    {

        $category = $this->category->where('parent', 0)->with('children')->get()->toArray();
        $result = self::recursiveCategory($category);
        array_push($result, ['id' => 0, 'title' => 'root']);
        return view('server.page.category.edit')
            ->with('data', $this->category->findOrFail($id))
            ->with('result', $result);
    }
    public function update(CategoryReqest $request, $id)
    {
        $data = $request->all();
        unset($data['id']);
        $this->category->find($id)->updateOrFail($data);
        return redirect()->route('admin.category.index');
    }
    public function destroy($id)
    {
        if ($this->category->destroy($id)) {
            return redirect()->route('admin.category.index');
        };
    }
    public function show($id)
    {
        return view('server.page.category.detail');
    }

    public function changeStatus($id, Request $request)
    {

        if ($this->category->find($id)->updateOrFail(['status' => $request->status])) {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function destroyList(Request $request)
    {
        if ($this->category->whereIn('id', $request->ids)->delete()) {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function search(Request $request)
    {

        $query = $request->all();

        $result = $this->category->with('parentItem');

        if (isset($query['status'])) {
            $result =    $result->where('status', $query['status']);
        }

        if (isset($query['sort'])) {
            if ($query['sort'] != 'desc') {
                $result =   $result->orderBy('id', 'ASC');
            } else {
                $result =   $result->orderBy('id', 'DESC');
            }
        }
        if (isset($query['search'])) {
            $result =   $result->where('name', 'LIKE', '%' . $query['search'] . '%');
        }
        if (isset($query['perPage'])) {
            $perPage = $query['perPage'];
        }

        return view('server.page.category.grid-item')->with('data', $result->paginate($perPage));
    }
}
