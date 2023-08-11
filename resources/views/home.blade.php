@extends('layouts.base')
@section('content')
    <!--start page wrapper -->
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-xl-2">
                                    <a href="#" class="btn btn-light mb-3 mb-lg-0" data-toggle="modal"
                                        data-target="#exampleFullScreenModal" id="buttontambahdokter"><i
                                            class='bx bxs-plus-square'></i>New
                                        Data</a>
                                </div>

                                <div class="col-lg-9 col-xl-10">
                                    <form class="float-lg-end">
                                        <div class="row row-cols-lg-auto g-2">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control ps-5"
                                                        placeholder="Search Product..."> <span
                                                        class="position-absolute top-50 product-show translate-middle-y"><i
                                                            class="bx bx-search"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                @foreach ($data as $item)
                <div class="col">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <div class="p-4 border radius-15">
                                <img src="assets/images/avatars/avatar-1.png" width="110" height="110"
                                    class="rounded-circle shadow" alt="" />
                                <h5 class="mb-0 mt-5">{{ $item->M_DoctorName}}</h5>
                                <p class="mb-3">Webdeveloper</p>
                                <div class="list-inline contacts-social mt-3 mb-3">
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                            class="bx bxl-facebook"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                            class="bx bxl-twitter"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                            class="bx bxl-google"></i></a>
                                    <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i
                                            class="bx bxl-linkedin"></i></a>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-light radius-15">Contact Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> --}}
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Dokter</th>
                                    <th>Nama Dokter</th>
                                    <th>Marekting Dokter</th>
                                    <th>HP</th>
                                    <th>Email</th>
                                    <th>Spesialis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ $item->M_DoctorCode}}</td>
                                    <td>{{ $item->M_DoctorPrefix}} {{ $item->M_DoctorName}} {{ $item->M_DoctorSufix}} {{ $item->M_DoctorSufix2}} {{ $item->M_DoctorSufix3}}</td>
                                    <td>
                                        @php
                                            $staff = DB::table('m_staff')->select('m_staff.M_StaffName')->where('M_StaffNIK',$item->M_DoctorM_StaffNIK)->first();
                                        @endphp
                                        @if ($staff)
                                        {{$staff->M_StaffName}}
                                        @endif
                                    </td>
                                    <td>{{$item->M_DoctorHP}}</td>
                                    <td>{{$item->M_DoctorEmail}}</td>
                                    <td>
                                        @php
                                            $spesialis = DB::table('m_specialist')->where('M_SpecialistCode',$item->M_DoctorM_SpecialistID)->first();
                                        @endphp
                                        @if ($spesialis)
                                            {{$spesialis->M_SpecialistName}}
                                        @endif
                                    </td>
                                    <td class="text-center">
										<button class="btn btn-light" data-toggle="modal" data-target="#exampleFullScreenModal" type="button" id="buttontambahjpa" data-id="{{$item->M_DoctorID}}">Detail</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>ID Dokter</th>
                                    <th>Nama Dokter</th>
                                    <th>Marekting Dokter</th>
                                    <th>HP</th>
                                    <th>Email</th>
                                    <th>Spesialis</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->
            {{-- Halaman : {{ $data->currentPage() }} <br/>
            Jumlah Data : {{ $data->total() }} <br/>
            Data Per Halaman : {{ $data->perPage() }} <br/> --}}


            {{-- {{ $data->links() }} --}}

        </div>
    </div>
    <!--end page wrapper -->
    <div class="modal fade" id="exampleFullScreenModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="datacontentdokter">

                </div>

            </div>
        </div>
    </div>
@endsection
