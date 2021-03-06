
    <div class="row upload-area" style="display:none">

        <div class="col-md-12">

            <a href="#upload"></a>
            <button type="button" style="margin-right:7px;font-size:30px" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="upload">
                <div style="margin-top:20px" class="text">{{ trans('template_asset_library_videos.dragndrop_videos') }}</div>
                <div class="text">{{ trans('template_asset_library.or') }}</div>
                <div style="margin-bottom:20px" class="browser">
                    <button type="button" class="btn btn-primary fileinput-button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="text">{{ trans('template_asset_library.open_file_browser') }}</span>
                        <input type="file" name="files[]" multiple>
                    </button>
                    <div style="margin-top:15px">
                    @if ($upload_max_filesize != '')
                        {{ $upload_max_filesize }}
                    @endif
                    -
                    @if ($post_max_size != '')
                        {{ $post_max_size }}
                    @endif
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true" style="cursor:pointer;font-size:18px" data-toggle="tooltip" data-placement="right" title="{{ $upload_max_filesize_tooltip }}"></span>
                    </div>
                    <input type="hidden" id="max_filesize_bytes" value="{{ $max_filesize_bytes }}">
                </div>
            </div><!-- upload //-->
						<div class="alert alert-info video-file-formats" role="alert">{{ trans('template_asset_library_videos.video_file_formats') }}</div>

        </div><!-- col-md-12 //-->

    </div><!-- row //-->

    <div class="files" data-file-counter="{{ ((count($videos)>0)?count($videos):0) }}">

        @if (count($videos) == 0)
            <div class="no-content">
                {{ trans('template_asset_library_videos.no_videos') }}
            </div>
        @endif

        <ul class="list">
        <?php
        $i = 0;
        foreach ($videos as $video) {
        ?>
            <li class="list-item">

                <div id="file-{{ $i }}" class="wrapper" data-video-id="{{ $video['id'] }}">

                    <div>
                        <video class="edit img-thumbnail" width="152" height="152" preload="metadata" data-video-id="{{ $video['id'] }}">
                            <source src="{{ $video['uri'] }}" type="video/mp4">
                        </video>
                    </div>

                    <div class="menu" style="text-align:center;margin-top:5px;display:none">
                        <a href="#" class="vr-view" data-video-id="{{ $video['id'] }}">{{ trans('template_asset_library_videos.vr_view') }}</a> | <a href="#" class="edit" data-video-id="{{ $video['id'] }}">{{ trans('template_asset_library_videos.edit') }}</a> <span class="insert-link" style="display:none">| <a href="#" class="insert" data-video-id="{{ $video['id'] }}">{{ trans('template_asset_library_videos.insert') }}</a></span>
                    </div>

                </div>

            </li>
        <?php
        $i++;
        }
        ?>
        </ul>

    </div><!-- files //-->


