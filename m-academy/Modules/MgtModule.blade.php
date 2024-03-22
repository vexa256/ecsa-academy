<div class="row">
    <div class="col-12">
        {{ HeaderBtn($Toggle = 'New', $Class = 'btn-danger float-end', $Label = 'New Course Module', $Icon = 'fa-plus') }}
    </div>
</div>

<div class="card-body px-5 py-5 bg-light shadow-lg table-responsive">
    <table class="mytable table table-rounded table-bordered border gy-3 gs-3">
        <thead>
            <tr class="fw-bold text-gray-800 border-bottom border-gray-200">
                <th>Module Name</th>
                <th>Module Details</th>
                <th>Thumbnail</th>
                <th class="bg-dark text-light">Actions</th>
            </tr>
        </thead>
        <tbody>
            @isset($DatabaseData)
            @foreach ($DatabaseData as $data)
            <tr>
                <td>{{ $data->ModuleName }}</td>
                <td>
                    <a data-bs-toggle="modal" class="btn btn-dark btn-sm" href="#Viewer{{ $data->id }}"><i class="fas fa-binoculars"></i></a>
                </td>
                <td>
                    <!-- Modified part for thumbnail -->
                    <a class="btn btn-danger btn-sm" data-gallery="manual" data-title="{{ $data->ModuleName }}" href="{{ ensureAssetPath($data->ThumbNail) }}">
                        <i class="fas fa-binoculars"></i>
                    </a>
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Choose Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a data-bs-toggle="modal" href="#Update{{ $data->id }}" class="dropdown-item" href="#">Update</a>
                            </li>
                            <li>
                                <a data-msg="You want to delete this record. This action is not reversible!!" data-route="{{ route('MassDelete', ['TableName' => 'modules', 'id' => $data->id]) }}" class="dropdown-item deleteConfirm" href="#">Delete</a>
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

@include('Modules.NewModule')

@isset($DatabaseData)
@foreach ($DatabaseData as $up)
{{ UpdateModalHeader($Title = 'Update the selected record', $ModalID = $up->id) }}
<form enctype="multipart/form-data" action="{{ route('MassUpdate') }}" class="" method="POST">
    @csrf
    <div class="row">
        <input type="hidden" name="id" value="{{ $up->id }}">
        <input type="hidden" name="TableName" value="modules">
        <div class="mb-3 col-md-12">
            <label id="label" for="" class="pt-3 required form-label">Enter Thumbnail</label>
            <input type="file" name="ThumbNail" class="form-control">
        </div>
        {{ RunUpdateModalFinal($ModalID = $up->id, $Extra = '', $csrf = null, $Title = null, $RecordID = $up->id, $col = '12', $te = '12', $TableName = 'modules') }}
    </div>
    {{ _UpdateModalFooter() }}
</form>
@endforeach
@endisset

@isset($DatabaseData)
@include('main-ui.DescViewer', ['DisplayData' => $DatabaseData, 'DescColumn' => 'ModuleDetails'])
@endisset
