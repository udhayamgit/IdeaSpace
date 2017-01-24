<!-- a-frame //-->
<a-scene reset-camera embedded>

    <a-assets>
        <a-asset-item id="model-dae" src="{{ $model_dae }}"></a-asset-item>
    </a-assets>

    <a-entity id="camera" position="0 0 4">
        <a-camera></a-camera>
    </a-entity>

    <a-entity scene-floor-grid id="scene-floor-grid"></a-entity>

    <a-sky color="#000000"></a-sky>

    <a-entity id="model" scale="{{ $scale }}" position="0 0 0" rotation="{{ $rotation_x }} {{ $rotation_y }} {{ $rotation_z }}" collada-model="#model-dae"></a-entity>

</a-scene>
