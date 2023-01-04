@extends('dashboard.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="mdi mdi-view-grid"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Complaints List</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-12">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="box-title align-items-start flex-column">
                                complaint List
                                <small class="subtitle">A list of complaints</small>
                            </h4>
                            {{-- @if (!auth()->user()->can('admin')) --}}
                            <div class="text-end">
                                <a href="{{ route('manage-complaint.create') }}" class="btn btn-primary btn-rounded"><i
                                        class="fa fa-plus"></i> Add New</a>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        @include('components.flash-message')
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="companyTable" class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="max-width: 19px"><span class="text-dark">No</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Title</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Category</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Status</span></th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-dark">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $complaint)
                                    <tr>
                                        <td class="text-center">
                                            <span class="text-dark">
                                                {{ $loop->iteration }}
                                            </span>
                                        </td>

                                        <td class="text-start">
                                            <span class="text-dark">
                                                {{ $complaint->title }}
                                            </span>
                                        </td>

                                        <td class="text-start">
                                            <span class="text-fade">
                                                {{ $complaint->complaintCategory->name }}
                                            </span>
                                        </td>

                                        <td class="text-start">
                                            @if ($complaint->status === 2)
                                                <span class="badge badge-success-light badge-lg">Approved</span>
                                            @elseif($complaint->status === 3)
                                                <span class="badge badge-danger-light badge-lg">Rejected</span>
                                            @else
                                                <span class="badge badge-warning-light badge-lg">In Progress</span>
                                            @endif
                                        </td>

                                        <td class="text-center">
                                            <a href="{{ route('manage-complaint.show', $complaint->slug) }}"
                                                class="waves-effect waves-light btn btn-sm btn-info-light btn-circle"><i
                                                    class="mdi mdi-eye"></i></a>

                                            <a href="{{ route('manage-complaint.edit', $complaint->slug) }}"
                                                class="waves-effect waves-light btn btn-sm btn-warning-light btn-circle mx-5"><span
                                                    class="icon-Write"><span class="path1"></span><span
                                                        class="path2"></span></span></a>

                                            <a href="#"
                                                class="waves-effect waves-light btn btn-sm btn-danger-light btn-circle"
                                                onclick="modalDelete('complaint', 'Nama complaint : {{ $complaint->title }}', '{{ route('manage-complaint.destroy', $complaint->slug) }}', '{{ route('manage-complaint.index') }}')"><span
                                                    class="icon-Trash1 fs-18"><span class="path1"></span><span
                                                        class="path2"></span></span></a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <script>
        $(function() {
            $('#companyTable').DataTable();
        });
    </script>
@endpush
