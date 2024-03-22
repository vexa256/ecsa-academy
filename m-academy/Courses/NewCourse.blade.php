<div class="modal fade" id="New">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new course


                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="{{ route('MassInsert') }}" class="row" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label id="label" for="" class=" required form-label">Select
                                Course Category
                            </label>
                            <select required name="Category" class="form-select form-select-solid"
                                data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option value="essentials-of-pharmaceutical-practice">Essentials of Pharmaceutical
                                    Practice</option>
                                <option value="health-mgt">Health Management</option>
                                <option value="healthcare-practice">Healthcare Practice</option>
                                <option value="publichealth">Public Health</option>
                                <option value="supply-chain-and-quality-assurance">Supply Chain and Quality Assurance
                                </option>
                            </select>


                        </div>
                        <div class="mb-3 col-md-12">
                            <label id="label" for="" class=" required form-label">Select
                                Course Operator
                            </label>
                            <select required name="CourseOperator" class="form-select form-select-solid"
                                data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option value="ECSA-HC">ECSA-HC</option>
                                <option value="EPN">EPN</option>

                            </select>


                        </div>
                        <div class="mb-3 col-md-12">
                            <label id="label" for="" class=" required form-label">Select
                                Course Course Language
                            </label>
                            <select required name="CourseLanguage" class="form-select form-select-solid"
                                data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option value="English">English</option>
                                <option value="French">French</option>

                            </select>


                        </div>
                        <div class="mb-3 col-md-12  ">
                            <label id="label" for="" class="pt-3 required form-label">Enter
                                Thubmnail</label>
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




                    <input type="hidden" name="CID"
                        value="{{ time() . substr(md5(uniqid()), 0, 14) }}
                        ">

                    <input type="hidden" name="uuid"
                        value="uuid{{ time() . substr(md5(uniqid()), 0, 14) }}
                        ">

                    <input type="hidden" name="TableName" value="courses">




            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-dark">Save
                    Changes</button>

                </form>
            </div>

        </div>
    </div>
</div>
