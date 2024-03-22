<div class="row">
    <div class="col-12">


        {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger  float-end', $Label = 'New Course Modular Test', $Icon = 'fa-plus') }}



    </div>
</div>

<div class="card-body px-5 py-5 bg-light shadow-lg table-responsive">
    <table class="mytable table table-rounded table-bordered border gy-3 gs-3">
        <thead>
            <tr class="fw-bold text-gray-800 border-bottom border-gray-200">
                <th>Test Name</th>
                <th>Description</th>
                <th>Test Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @isset($DatabaseData)
            @foreach ($DatabaseData as $data)
            <tr>
                <td>{{ $data->TestName }}</td>
                <td>{{ $data->Description }}</td>
                <td>{{ $data->Type }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Choose Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                            <li>
                                <a href="{{ route('SetModularTestQuestions', ['TID'=> $data->TID]) }}" class="dropdown-item" href="#">Attach Questions</a>
                            </li>

                            <li>
                                <a data-bs-toggle="modal" href="#Update{{ $data->id }}" class="dropdown-item" href="#">Update</a>
                            </li>
                            <li>
                                <a data-msg="You want to delete this record. This action is not reversible!!" data-route="{{ route('MassDelete', ['TableName' => 'tests', 'id' => $data->id]) }}" class="dropdown-item deleteConfirm" href="#">Delete</a>
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

@include('ModularTests.NewModularTest')

@isset($DatabaseData)
@foreach ($DatabaseData as $up)
{{ UpdateModalHeader($Title = 'Update the selected record', $ModalID = $up->id) }}
<form enctype="multipart/form-data" action="{{ route('MassUpdate') }}" class="" method="POST">
    @csrf
    <div class="row">
        <input type="hidden" name="id" value="{{ $up->id }}">
        <input type="hidden" name="TableName" value="tests">

        {{ RunUpdateModalFinal($ModalID = $up->id, $Extra = '', $csrf = null, $Title = null, $RecordID = $up->id, $col = '12', $te = '12', $TableName = 'tests') }}
    </div>
    {{ _UpdateModalFooter() }}
</form>
@endforeach
@endisset

@isset($DatabaseData)
@include('main-ui.DescViewer', ['DisplayData' => $DatabaseData, 'DescColumn' => 'Description'])
@endisset
