@isset($DisplayData)

    @foreach ($DisplayData as $Data)
        <div class="modal fade" id="Viewer{{ $Data->id }}">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <h5 class="modal-title">More details </h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body ">

                        <div class="card-body">

                            <div class="container">
                                {{ $Data->{$DescColumn} }}
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                        {{--
                <button type="submit" class="btn btn-dark">Save
                    Changes</button> --}}


                    </div>

                </div>
            </div>
        </div>
    @endforeach

@endisset
