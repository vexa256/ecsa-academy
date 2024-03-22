<div class="row">
    <div class="col-12">
        {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger float-end', $Label = 'New Course', $Icon = 'fa-plus') }}
    </div>
</div>

<div class="card-body px-5 py-5 bg-light shadow-lg table-responsive">
    <table class="mytable table table-rounded table-bordered border gy-3 gs-3">
        <thead>
            <tr class="fw-bold text-gray-800 border-bottom border-gray-200">
                <th>Course Name</th>
                <th>Course Category</th>
                <th>Course Details</th>

                <th>Thumbnail</th>
                <th class="bg-dark text-light">Actions</th>
            </tr>
        </thead>
        <tbody>
            @isset($DatabaseData)
                @foreach ($DatabaseData as $data)
                    <tr>
                        <td>{{ $data->CourseName }}</td>
                        <td>{{ $data->Category }}</td>
                        <td>
                            <a data-bs-toggle="modal" class="btn btn-dark btn-sm" href="#Viewer{{ $data->id }}"><i
                                    class="fas fa-binoculars"></i></a>
                        </td>
                        <td>
                            <!-- Modified part for thumbnail -->
                            {{-- <a class="btn btn-danger btn-sm" data-gallery="manual" data-title="{{ $data->CourseName }}"
                                href="{{ ensureAssetPath($data->ThumbNail) }}">
                                <i class="fas fa-binoculars"></i> --}}
                            <img style="height: 100px" src="{{ ensureAssetPath($data->ThumbNail) }}" alt="">
                            {{-- </a> --}}
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Choose Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a data-bs-toggle="modal" href="#Update{{ $data->id }}" class="dropdown-item"
                                            href="#">Update</a>
                                    </li>
                                    <li>
                                        <a data-msg="You want to delete this record. This action is not reversible!!"
                                            data-route="{{ route('MassDelete', ['TableName' => 'courses', 'id' => $data->id]) }}"
                                            class="dropdown-item deleteConfirm" href="#">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</div>

@include('Courses.NewCourse')



@isset($DatabaseData)
    @foreach ($DatabaseData as $up)
        {{ UpdateModalHeader($Title = 'Update the selected record', $ModalID = $up->id) }}
        <form enctype="multipart/form-data" action="{{ route('MassUpdate') }}" class="" method="POST">
            @csrf

            <div class="row">
                <div class="mb-3 col-md-12">
                    <label id="label" for="" class=" required form-label">Select
                        Course Category
                    </label>
                    <select required name="Category" class="form-select form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
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
                    <select required name="CourseOperator" class="form-select form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <option value="ECSA-HC">ECSA-HC</option>
                        <option value="EPN">EPN</option>

                    </select>


                </div>
                <div class="mb-3 col-md-12">
                    <label id="label" for="" class=" required form-label">Select
                        Course Course Language
                    </label>
                    <select required name="CourseLanguage" class="form-select form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <option value="English">English</option>
                        <option value="French">French</option>

                    </select>


                </div>
                <input type="hidden" name="id" value="{{ $up->id }}">

                <input type="hidden" name="TableName" value="courses">


                <div class="mb-3 col-md-12  ">
                    <label id="label" for="" class="pt-3 required form-label">Enter Thubmnail</label>
                    <input type="file" name="ThumbNail" class="form-control">
                </div>

                {{ RunUpdateModalFinal(
                    $ModalID = $up->id,
                    $Extra = '',
                    $csrf = null,
                    $Title = null,
                    $RecordID = $up->id,
                    $col = '12',
                    $te = '12',
                    $TableName = 'courses',
                ) }}
            </div>

            {{ _UpdateModalFooter() }}

        </form>
    @endforeach
@endisset


@isset($DatabaseData)
    @include('main-ui.DescViewer', ['DisplayData' => $DatabaseData, 'DescColumn' => 'CourseDetails'])
@endisset
