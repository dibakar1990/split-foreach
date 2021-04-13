@foreach($data_array->chunk(2) as $chunk)
                <div class="box-area">
                        @foreach($chunk as $key => $val)
                            <div class="box-part1">
                                your data
                            </div>
                        @endforeach
                </div>
            @endforeach
