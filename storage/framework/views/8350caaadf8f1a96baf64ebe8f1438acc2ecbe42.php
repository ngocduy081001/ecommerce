<div class="popup" style="width: 350px" ng-show="editNamePopup">
    <div class="header">
        <div class="title"><?php echo e(trans('filemanager::filemanager.edit')); ?></div>
        <div class="close" ng-click="editNamePopup=false">x</div>
    </div>
    <div class="popup_content">
        <div class="form-group">
            <label for="edit_name"><?php echo e(trans('filemanager::filemanager.name')); ?></label>
            <input type="text" id="edit_name" ng-model="selected.name">
        </div>

    </div>
    <div class="footer">
        <div></div>
        <div>
            <button class="success" ng-click="updateName(selected)" ladda="selected.nameUpdating"><?php echo e(trans('filemanager::filemanager.update')); ?></button>
        </div>
    </div>
</div>

<div class="popup" style="width: 350px" ng-show="convertPopup">
    <div class="header">
        <div class="title"><?php echo e(trans('filemanager::filemanager.convert')); ?></div>
        <div class="close" ng-click="convertPopup=false">x</div>
    </div>
    <div class="popup_content">
        <div style="display: flex;">
            <div style="width:150px;height: 100px;overflow: hidden; margin-right: 10px;">
                <img ng-src="{{ selectedPhoto.absolute_url }}"
                     onerror="this.src='/filemanager/img/previews/missing.png'"
                     width="100%"
                     alt="{{ selectedPhoto.name }}">
            </div>
            <p>{{ selectedPhoto.name }} <br>
                <?php echo e(trans('filemanager::filemanager.size')); ?>: {{ formatBytes(selectedPhoto.file_size) }} <br>
                <?php echo e(trans('filemanager::filemanager.type')); ?>: {{ selectedPhoto.ext }}
            </p>
        </div>

        <div style="margin-top: 20px;">
            <p>
                <Strong ng-hide="selectedFormat"><?php echo e(trans('filemanager::filemanager.choose_format')); ?></Strong>
                <Strong ng-show="selectedFormat">Convert {{ selectedPhoto.ext }} to {{ selectedFormat }}</Strong>
            </p>
            <div style="margin-top: 10px;">
                <button
                        ng-repeat="format in imageFormats" ng-hide="selectedPhoto.ext===format"
                        ng-class="selectedFormat===format?'primary':''"
                ng-click="selectFormat(format)">{{format}}</button>
            </div>
        </div>

    </div>
    <div class="footer">
        <div></div>
        <div>
            <button class="success" ng-click="convert(selectedPhoto,selectedFormat)"
                    ladda="selectedPhoto.converting"><?php echo e(trans('filemanager::filemanager.convert')); ?></button>
        </div>
    </div>
</div><?php /**PATH D:\web_ban_hang\ecommerce\vendor\haruncpi\laravel-simple-filemanager\src/views/partials/popup.blade.php ENDPATH**/ ?>