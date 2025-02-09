<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load OBJ File</title>
    <style>
        body {
            margin: 0;
        }

        canvas {
            display: block;
        }
    </style>
</head>

<body>
    <div id="video"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js"
        integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>
    <script>
        var scene, renderer;
        var camera;
        var mesh;

        var isMouseDown = false;

        function init() {

            //シーンを作成
            scene = new THREE.Scene();

            //カメラを作成
            camera = new THREE.PerspectiveCamera(45, 600 / 600, 0.1, 10);
            camera.position.z = 5;

            //レンダラーを作成
            renderer = new THREE.WebGLRenderer();
            renderer.setSize(600, 600);
            document.body.appendChild(renderer.domElement);
            //背景色を設定
            renderer.setClearColor(0x00ffff, 1);
            renderer.gammaOutput = true;

            //光源を作成
            var light = new THREE.DirectionalLight("#c1582d", 1);
            var ambient = new THREE.AmbientLight("#85b2cd");
            light.position.set(0, -70, 100).normalize();
            scene.add(light);
            scene.add(ambient);

            var texture = new THREE.Texture();
            var manager = new THREE.LoadingManager();
            manager.onProgress = function(item, loaded, total) {};
            var onProgress = function(xhr) {};
            var onError = function(xhr) {};

            // 3Dモデル用テクスチャ画像の読込
            var loader = new THREE.GLTFLoader();

            // Load a glTF resource
            loader.load(
                // resource URL
                'https://sofa.ngocduy.xyz/themes/shop/default/video/tripo_convert_b927be71-05d5-4d18-8501-d63233f08d56.glb',
                // called when the resource is loaded
                function(gltf) {

                    mesh = gltf.scene;
                    mesh.scale.set(10, 10, 10);
                    scene.add(mesh);

                    document.getElementById('video').appendChild(renderer.domElement);

                },
                // called when loading is in progresses
                function(xhr) {

                    console.log((xhr.loaded / xhr.total * 100) + '% loaded');

                },
                // called when loading has errors
                function(error) {

                    console.log('An error happened');

                }
            );

            document.addEventListener("mousedown", onMouseDown);
            document.addEventListener("touchstart", onMouseDown);
            document.addEventListener("mouseup", onMouseUp);
            document.addEventListener("touchend", onMouseUp);
            document.addEventListener("mousemove", onMouseMove);
            document.addEventListener("touchmove", onMouseMove);

            render();
        }

        function render() {
            requestAnimationFrame(render);
            renderer.render(scene, camera);
        }


        // マウスを押したとき
        function onMouseDown(event) {
            isMouseDown = true;
        }

        // マウスを動かした時
        function onMouseMove(event) {
            if (isMouseDown) {
                // 3DモデルをX軸とY軸方向に回転させます
                if (mesh) {
                    mesh.rotation.y = getMouseX(event) / 50;
                    mesh.rotation.x = getMouseY(event) / 50;

                }
            }
        }

        // マウスを離したとき
        function onMouseUp(event) {
            isMouseDown = false;
        }

        function getMouseX(event) {
            if (event.type.indexOf("touch") == -1)
                return event.clientX;
            else
                return event.touches[0].clientX;
        }

        function getMouseY(event) {
            if (event.type.indexOf("touch") == -1)
                return event.clientY;
            else
                return event.touches[0].clientY;
        }

        window.addEventListener('DOMContentLoaded', init);
    </script>
</body>

</html>
