<header id="head">
    <div class="container">


        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4" style="padding-bottom: 100px">
                @foreach($sliders as $key=>$slide)
                    <div data-thumb="{{ asset('images/slides').'/'.$slide->gambar }}" data-src="{{ asset('images/slides').'/'.$slide->gambar }}">
                        <div class="camera_caption moveFromBottom">
                           @if(!empty($slide->header))
                            <h1>
                                {{ strtoupper($slide->header) }}
                            </h1>
                            @endif
                            @if(!empty($slide->keterangan))
                            <p> {{ $slide->keterangan }}</p>
                                @endif
                        </div>
                    </div>
                    @endforeach
            </div><!-- #camera_wrap_3 -->
        </div><!-- .fluid_container -->
    </div>
</header>