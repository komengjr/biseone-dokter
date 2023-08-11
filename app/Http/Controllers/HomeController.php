<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = DB::table('m_doctor')->get();
        // dd($staff);
        return view('home',['data'=>$data]);
    }
    public function tambahdokter()
    {
        $spesialis = DB::table('m_specialist')->get();
        $staff = DB::table('m_staff')->get();
        return view('modal.formdokter',['staff'=>$staff,'spesialis'=>$spesialis]);
    }
    public function jpadokter($id)
    {
        // dd($id);
        $data = DB::table('m_doctor')->where('M_DoctorID',$id)->first();
        $jpa = DB::table('m_doctoraddress')
        ->join('nat_jpa','nat_jpa.Nat_JpaID','=','m_doctoraddress.M_DoctorAddressNat_JpaID')
        ->join('m_kelurahan','m_kelurahan.M_KelurahanID','=','m_doctoraddress.M_DoctorAddressM_KelurahanID')
        ->where('m_doctoraddress.M_DoctorAddressM_DoctorID',$id)->get();
        return view('modal.formjpadokter',['data'=>$data,'jpa'=>$jpa]);
    }
    public function formjpadokter($id)
    {
        $city = DB::table('m_city')->get();
        $jpa = DB::table('nat_jpa')->get();
        return view('modal.formaddjpadokter',['id'=>$id,'jpa'=>$jpa,'city'=>$city]);
    }
    public function datakota($id)
    {
        $distic = DB::table('m_district')->where('M_DistrictM_CityID',$id)->get();
        return view('modal.distric',['distric'=>$distic]);
    }
    public function datadistric($id)
    {
        $kelurahan = DB::table('m_kelurahan')->where('M_KelurahanM_DistrictID',$id)->get();
        return view('modal.kelurahan',['kelurahan'=>$kelurahan]);
    }

    public function posttambahdokter(Request $request)
    {
        DB::table('m_doctor')->insert(
            [
                'M_DoctorCode' =>  $request->kd_dokter,
                'M_DoctorOldCode' =>  '',
                'M_DoctorM_BranchCode' =>  'PA',
                'M_DoctorPrefix' =>   $request->awal1,
                'M_DoctorPrefix2' =>   $request->awal2,
                'M_DoctorName' =>   $request->nama_dokter,
                'M_DoctorSufix' =>   $request->akhir1,
                'M_DoctorSufix2' =>   $request->akhir2,
                'M_DoctorSufix3' =>  '',
                'M_DoctorM_SexID' =>   $request->jk,
                'M_DoctorM_ReligionID' =>   $request->agama,
                'M_DoctorEmail' =>   $request->email,
                'M_DoctorEmailIsDefault' =>  'N',
                'M_DoctorHP' =>   $request->hp,
                'M_DoctorPhone' =>  $request->telpon,
                'M_DoctorIsMarketingConfirm' =>  'Y',
                'M_DoctorIsPJ' =>  'N',
                'M_DoctorIsDefaultPJ' =>  'N',
                'M_DoctorM_SpecialID' =>  '0',
                'M_DoctorIsClinic' =>  'N',
                'M_DoctorIsDefault' =>  'N',
                'M_DoctorIsDefaultMcu' =>  'N',
                'M_DoctorIsActive' =>  'Y',
                'M_DoctorM_UserID' =>  '516',
                'M_DoctorM_StaffID' =>  '233',
                'M_DoctorM_StaffNIK' =>  $request->staff,
                'M_DoctorNote' =>  $request->catatan,
                'M_DoctorIsUploaded' =>  'N',
                'M_DoctorM_SpecialistID' =>  $request->spesialis,
                'M_DoctorDOB' =>  $request->tgl_lahir,
                'M_DoctorUserID' =>  '516',

            ]);
        return redirect()->back();
    }
    public function posttambahjpadokter(Request $request)
    {
        DB::table('m_doctoraddress')->insert(
            [
                'M_DoctorAddressM_DoctorID' =>  $request->id,
                'M_DoctorAddressNote' =>  $request->label,
                'M_DoctorAddressDescription' =>  $request->alamat,
                'M_DoctorAddressM_KelurahanID' =>  $request->kelurahan,
                'M_DoctorAddressNat_JpaID' =>  $request->jpa,
                'M_DoctorAddressDeliveryDefault' =>  'N',
                'M_DoctorAddressIsActive' =>  'Y',
                'M_DoctorAddressM_UserID' =>  '511',

            ]);
        return redirect()->back();
    }
}
