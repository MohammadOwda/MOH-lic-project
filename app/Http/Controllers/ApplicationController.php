<?php

namespace App\Http\Controllers;
use App\Major;
use App\Martial_Status;
use App\University;
use App\Natunality;
use App\Qualify;
use App\Sex;
use App\ID_type;
use App\lic_tb;

use DB;
use PDO;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        //->unique('MJ_GROUP')

        $major = Major::where('mj_active',1)->pluck('job_title','mj_group');
        //dd(lic_tb::getMaxSerial());
      
        return view('admin/application-form', [
            'major' =>$major,
            'status'=> Martial_Status::getMartialStatus(),
            'university' =>University::getUniversity(),
            'natunality' => Natunality::getNatunality(),
            'qualification' => Qualify::getQualification(),
            'gender' => Sex::getGender(),
            'idType'  => ID_type::getid(),
            'serial' => lic_tb::getNextSerial(),
            
        ]);
    }
    public function getbyNatId($nat_code)
	{
        $university = University::where('univ_nat_cd', $nat_code)->get();
		return response()->JSON($university);
    }

    public function getbymajor($major)
	{
        $jobTitle = Major::where('mj_active',1)->where('mj_group', $major)->pluck('mj_title','mj_code');
		return response()->JSON($jobTitle);
    }

    public function store(Request $request)
	{

        $date = explode('-', $request->date);
        $year = $date[0];
        $ERR_DESC_OUT = " ";
        $ERR_STATUS_OUT = 1;
/*

 JOB_LIC_ID_IN  IN VARCHAR2,
   JOB_SERIAL_IN  IN NUMBER,
   JOB_YEAR_IN    IN NUMBER,
   JOB_ID_NO_IN IN NUMBER,
   JOB_FNAME_IN IN VARCHAR2,
   JOB_SNAME_IN IN VARCHAR2,
   JOB_TNAME_IN IN VARCHAR2,
   JOB_LNAME_IN IN VARCHAR2,
   JOB_SEX_CD_IN IN NUMBER,
   JOB_MSTATUS_CD_IN IN NUMBER,
   JOB_BIRTH_PLACE_IN IN VARCHAR2,
   JOB_ADDRESS_IN IN VARCHAR2,

   JOB_JADDRESS_IN IN VARCHAR2,
   JOB_BILL_NO_IN IN    VARCHAR2,
   JOB_BILL_DT_IN IN    DATE,
   JOB_NOTE_IN IN VARCHAR2,
   JOB_ID_TYPE_CD_IN IN NUMBER,
   JOB_REG_DT_IN IN DATE,
   JOB_NAT_CD_IN IN NUMBER,
   JOB_QUALIFY_CD_IN IN NUMBER,
   JOB_JAWAL_IN IN VARCHAR2,
   JOB_BILL_AMOUNT_IN IN    NUMBER,
   JOB_NATIONALITY_CD_IN IN NUMBER,
   JOB_JADDRESS2_IN IN VARCHAR2,


   JOB_FNAME_EN_IN IN VARCHAR2,
   JOB_SNAME_EN_IN IN VARCHAR2,
   JOB_TNAME_EN_IN IN VARCHAR2,
   JOB_LNAME_EN_IN IN VARCHAR2,
   ERR_DESC_OUT   OUT VARCHAR2,
   ERR_STATUS_OUT OUT NUMBER

*/


        $data = [
            'JOB_LIC_ID_IN'  => $request->orderNumber,
            'JOB_SERIAL_IN'  => $request->licNumber,
            'JOB_YEAR_IN'  => $year,
            'JOB_EXP_DT_IN' => dateFormatDataBase($request->EXP_DT),
            'JOB_ID_NO_IN' => $request->idValue,
            'JOB_FNAME_IN' => $request->name_ar,
            'JOB_SNAME_IN' => $request->fname_ar,
            'JOB_TNAME_IN' => $request->gfname_ar,
            'JOB_LNAME_IN' => $request->fmname_ar,
            'JOB_SEX_CD_IN' => $request->sex,
            'JOB_MSTATUS_CD_IN' => $request->status,
            'JOB_BIRTH_DT_IN' => dateFormatDataBase($request->DOB),
            'JOB_BIRTH_PLACE_IN' => $request->DOB_location,
            'JOB_ADDRESS_IN' => $request->address,
            
            'JOB_JADDRESS_IN'=> $request->jaddress,
            'JOB_BILL_NO_IN'=> $request->bill_number,
            'JOB_BILL_DT_IN'=> dateFormatDataBase($request->bill_date), 
            'JOB_NOTE_IN'=> $request->notes,
            'JOB_ID_TYPE_CD_IN'=> $request->idType , 
            'JOB_REG_DT_IN'=> dateFormatDataBase($request->date), 
            'JOB_NAT_CD_IN'=> $request->qualify_nat, 
            'JOB_QUALIFY_CD_IN'=> $request->qualify_code , 
            'JOB_JAWAL_IN'=> $request->jawal , 
            'JOB_BILL_AMOUNT_IN'=> $request->amount ,
            'JOB_NATIONALITY_CD_IN'=> $request->nationality ,
            'JOB_JADDRESS2_IN'=> $request->jaddress2,
            
            'JOB_FNAME_EN_IN' => $request->name_en,
            'JOB_SNAME_EN_IN' => $request->fname_en,
            'JOB_TNAME_EN_IN' => $request->gfname_en,
            'JOB_LNAME_EN_IN' => $request->fmname_en,
            'ERR_DESC_OUT'  => $ERR_DESC_OUT,
            'ERR_STATUS_OUT'  => $ERR_STATUS_OUT,

        ];
        $transaction = DB::transaction(function ($conn) use ($data) {
            $pdo = $conn->getPdo();  
            $stmt = $pdo->prepare("begin PHARM_PK.INSERT_ORDER_TEST(
                :JOB_LIC_ID_IN, 
                :JOB_SERIAL_IN,
                :JOB_YEAR_IN,
                :JOB_EXP_DT_IN,
                :JOB_ID_NO_IN,
                :JOB_FNAME_IN, 
                :JOB_SNAME_IN,
                :JOB_TNAME_IN, 
                :JOB_LNAME_IN,
                :JOB_SEX_CD_IN, 
                :JOB_MSTATUS_CD_IN,
                :JOB_BIRTH_DT_IN,
                :JOB_BIRTH_PLACE_IN, 
                :JOB_ADDRESS_IN,
                :JOB_JADDRESS_IN, 
                :JOB_BILL_NO_IN,
                :JOB_BILL_DT_IN,
                :JOB_NOTE_IN, 
                :JOB_ID_TYPE_CD_IN,
                :JOB_REG_DT_IN,
                :JOB_NAT_CD_IN, 
                :JOB_QUALIFY_CD_IN, 
                :JOB_JAWAL_IN, 
                :JOB_BILL_AMOUNT_IN,
                :JOB_NATIONALITY_CD_IN, 
                :JOB_JADDRESS2_IN,
                :JOB_FNAME_EN_IN, 
                :JOB_SNAME_EN_IN,
                :JOB_TNAME_EN_IN, 
                :JOB_LNAME_EN_IN,
                :ERR_DESC_OUT, 
                :ERR_STATUS_OUT
        
        ); end;");
            $stmt->bindParam(':JOB_LIC_ID_IN', $data['JOB_LIC_ID_IN'], PDO::PARAM_STR, 250);
            $stmt->bindParam(':JOB_SERIAL_IN', $data['JOB_SERIAL_IN'], PDO::PARAM_INT);
            $stmt->bindParam(':JOB_YEAR_IN', $data['JOB_YEAR_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_EXP_DT_IN', $data['JOB_EXP_DT_IN'], PDO::PARAM_STR); 
            $stmt->bindParam(':JOB_ID_NO_IN', $data['JOB_ID_NO_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_FNAME_IN', $data['JOB_FNAME_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_SNAME_IN', $data['JOB_SNAME_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_TNAME_IN', $data['JOB_TNAME_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_LNAME_IN', $data['JOB_LNAME_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_SEX_CD_IN', $data['JOB_SEX_CD_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_MSTATUS_CD_IN', $data['JOB_MSTATUS_CD_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_BIRTH_DT_IN', $data['JOB_BIRTH_DT_IN'], PDO::PARAM_STR); 
            $stmt->bindParam(':JOB_BIRTH_PLACE_IN', $data['JOB_BIRTH_PLACE_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_ADDRESS_IN', $data['JOB_ADDRESS_IN'], PDO::PARAM_STR, 250); 

            $stmt->bindParam(':JOB_JADDRESS_IN', $data['JOB_JADDRESS_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_BILL_NO_IN', $data['JOB_BILL_NO_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_BILL_DT_IN', $data['JOB_BILL_DT_IN'], PDO::PARAM_STR); 
            $stmt->bindParam(':JOB_NOTE_IN', $data['JOB_NOTE_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_ID_TYPE_CD_IN', $data['JOB_ID_TYPE_CD_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_REG_DT_IN', $data['JOB_REG_DT_IN'], PDO::PARAM_STR); 
            $stmt->bindParam(':JOB_NAT_CD_IN', $data['JOB_NAT_CD_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_QUALIFY_CD_IN', $data['JOB_QUALIFY_CD_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_JAWAL_IN', $data['JOB_JAWAL_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_BILL_AMOUNT_IN', $data['JOB_BILL_AMOUNT_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_NATIONALITY_CD_IN', $data['JOB_NATIONALITY_CD_IN'], PDO::PARAM_INT); 
            $stmt->bindParam(':JOB_JADDRESS2_IN', $data['JOB_JADDRESS2_IN'], PDO::PARAM_STR, 250); 



            $stmt->bindParam(':JOB_FNAME_EN_IN', $data['JOB_FNAME_EN_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_SNAME_EN_IN', $data['JOB_SNAME_EN_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_TNAME_EN_IN', $data['JOB_TNAME_EN_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':JOB_LNAME_EN_IN', $data['JOB_LNAME_EN_IN'], PDO::PARAM_STR, 250); 
            $stmt->bindParam(':ERR_DESC_OUT', $data['ERR_DESC_OUT'], PDO::PARAM_STR, 250);
            $stmt->bindParam(':ERR_STATUS_OUT', $data['ERR_STATUS_OUT'], PDO::PARAM_INT, 1);

            $stmt->execute();
            return $data;
        });
        if ($transaction['ERR_STATUS_OUT'] == 1) {
            return redirect()->route('application.index');
        }
    }
}