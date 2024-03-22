<div class="modal fade" id="New">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new session for the course module

                    <span class="fw-bolder text-danger">{{ $ModuleName }}</span>
                </h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <form action="{{ route('MassInsert') }}" class="row" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="mb-3 col-md-12  ">
                            <label id="label" for="" class="pt-3 required form-label">Enter Thubmnail</label>
                            <input type="file" name="ThumbNail" class="form-control">
                        </div>

                        @foreach ($Form as $data)
                        @if ($data['type'] == 'string')
                        {{ CreateInputText($data, $placeholder = null, $col = '12') }}
                        @elseif (
                        'smallint' == $data['type'] ||
                        'bigint' === $data['type'] ||
                        'decimal' == $data['type'] ||
                        'float' == $data['type'] ||
                        'integer' == $data['type'] ||
                        'decimal' == $data['type'] ||
                        'bigint' == $data['type']
                        )
                        {{ CreateInputInteger($data, $placeholder = null, $col = '4') }}
                        @elseif ($data['type'] == 'date' || $data['type'] == 'datetime')
                        {{ CreateInputDate($data, $placeholder = null, $col = '3') }}
                        @endif
                        @endforeach

                    </div>

                    <div class="row">
                        @foreach ($Form as $data)
                        @if ($data['type'] == 'text')
                        {{ CreateInputEditor($data, $placeholder = null, $col = '12') }}
                        @endif
                        @endforeach

                    </div>

                    <input type="hidden" name="CID" value="{{ $CID }}">
                    <input type="hidden" name="MID" value="{{ $MID }}">
                    <input type="hidden" name="uuid" value="uuid{{ time() . substr(md5(uniqid()), 0, 14) }}">
                    <input type="hidden" name="SID" value="SID{{ time() . substr(md5(uniqid()), 0, 14) }}">
                    <input type="hidden" name="TableName" value="sessions">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
