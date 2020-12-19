@extends('layouts.layout')
@section('header')
<h3 class="page-title">
	نظام الاجازة والتراخيص <small>طلب مزاولة</small>
</h3>
@endsection

@section('current-page')
<a href="/application">طلب مزاولة</a>
@endsection

@section('content')
<!-- BEGIN PAGE CONTENT-->
<form action="{{route('application.store')}}" method="POST">
@csrf
<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> بيانات الطلب
		</div>

	</div>
	<div class="portlet-body form">


		<div class="container1">
			<div class="row">
				
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>رقم الطلب</label>
							<input type="number" value="{{$serial}}" disabled name="orderNumber" id="JOB_SERIAL" class="form-control" placeholder="رقم الطلب">
						</div>
						<div class="form-group col-md-3">
							<label>تاريخ التسجيل</label>
							<input type="date" name="date" id="date" class="form-control" placeholder="تاريخ التسجيل">
						</div>
						<div class="form-group col-md-3 ">
							<label>رقم مزاولة المهنة</label>
							<input type="text" name="licNumber" id="JOB_LIC_ID" class="form-control" placeholder="رقم مزاولة المهنة">
						</div>
				
			</div>
		</div>
	</div>


</div>
</div>


<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> البيانات الشخصية
		</div>

	</div>
	<div class="portlet-body form">
		<div class="container2">

			<div class="row">
				<div class="form-row">
					<div class="form-group col-md-3">
							<label>نوع الوثيقة</label>
							<select name="idType" id="inputState" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($idType as $id)
								<option value="{{ $id->id_code }}"> {{ $id->id_name_ar }} </option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group col-md-3">
						<label>رقم الهوية/الوثيقة/التصريح</label>	
						<input name="idValue" type="number" class="form-control" placeholder="رقم الهوية/الوثيقة/التصريح">
					</div>
			</div>

			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-2">
							<label>الاسم</label>
							<input name="name_ar" type="text" class="form-control" placeholder="الاسم">
						</div>
						<div class="form-group col-md-2">
							<label> Name</label>
							<input name="name_en" type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group col-md-1">
							<label>اسم الأب</label>
							<input name="fname_ar" type="text" class="form-control" placeholder="اسم الأب">
						</div>
						<div class="form-group col-md-1">
							<label> Father</label>
							<input name="fname_en" type="text" class="form-control" placeholder="Father">
						</div>
						<div class="form-group col-md-1">
							<label>اسم الجد</label>
							<input name="gfname_ar" type="text" class="form-control" placeholder="اسم الجد">
						</div>
						<div class="form-group col-md-1">
							<label>GrandFather</label>
							<input name="gfname_en" type="text" class="form-control" placeholder="Father">
						</div>
						<div class="form-group col-md-2">
							<label>العائلة</label>
							<input name="fmname_ar" type="text" class="form-control" placeholder="العائلة">
						</div>
						<div class="form-group col-md-2">
							<label> Family</label>
							<input name="fmname_en" type="text" class="form-control" placeholder="Family">
						</div>
					</div>
			</div>
			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>الجنس</label>
							<select name="sex" id="inputState" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($gender as $gender)
								<option value="{{ $gender->sex_code }}"> {{ $gender->sex_name_ar }} </option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-3">
							<label>الحالة الاجتماعية</label>
							<select name="status" id="inputState" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($status as $status)
								<option value="{{ $status->ms_code }}"> {{ $status->ms_name_ar }} </option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-3">
							<label>تاريخ الميلاد</label>
							<input name="DOB"  type="date" class="form-control" placeholder="تاريخ الميلاد">
						</div>
						<div class="form-group col-md-3">
							<label>مكان الميلاد</label>
							<input name="DOB_location" type="text" class="form-control" placeholder="مكان الميلاد">
						</div>
					</div>
			</div>
			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>الجنسية</label>
							<select name="nationality" id="inputState" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($natunality as $nat)
								<option value="{{ $nat->nat_code }}"> {{ $nat->nat_name_ar }} </option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-3">
							<label>رقم الهاتف</label>
							<input name="phone_number" type="number" class="form-control" placeholder="رقم الهاتف">
						</div>
						<div class="form-group col-md-3">
							<label>رقم الجوال</label>
							<input name="jawal"name="mobile_number" type="number" class="form-control" placeholder="رقم الجوال">
						</div>
						<div class="form-group col-md-3">
							<label>عنوان السكن</label>
							<input name="address" type="text" class="form-control" placeholder="عنوان السكن">
						</div>
					</div>
			</div>
			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>العمل الحالي</label>
							<input  name="jaddress" type="text" class="form-control" placeholder="العمل الحالي">
						</div>
						<div class="form-group col-md-6">
							<label>العمل الاضافي</label>
							<input  name="jaddress2" type="text" class="form-control" placeholder="العمل الاضافي">
						</div>
					</div>
			</div>
		</div>
	</div>
</div>




<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> البيانات المؤهل
		</div>

	</div>
	<div class="portlet-body form">

		<div class="container3">

			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label>الدولة</label>
							<select name="qualify_nat" id="countryID" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($natunality as $country)
								<option value="{{ $country->nat_code }}"> {{ $country->nat_name_country_ar }} </option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label>الجامعة</label>
							<select id="uniID" name="uniName" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($university as $uni)
								<option value="{{ $uni->univ_code }}"> {{ $uni->univ_title }} </option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-4">
							<label>المؤهل العلمي</label>
							<select name="qualify_code" id="inputState" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($qualification as $qual)
								<option value="{{ $qual->qualify_code }}"> {{ $qual->qualify_title }} </option>
								@endforeach
							</select>
						</div>

					</div>
			</div>
			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label>المهنة</label>
							<select id="job" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
								@foreach($major as $key=>$mj)
								<option value="{{ $key }}"> {{ $mj }} </option>
								@endforeach
							</select>

						</div>
						<div class="form-group col-md-4">
							<label>المسمى</label>
							
							<select id="major" class="form-control selectpicker style" data-live-search="true">
								<option value="" disabled selected hidden></option>
							 
							</select>
							
						</div>
						<div class="form-group col-md-4">
							<label>تاريخ التخرج</label>
							<input type="date" class="form-control">
						</div>
					</div>
			</div>
		</div>
	</div>
</div>



<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i> البيانات الدفع
		</div>

	</div>
	<div class="portlet-body form">

		<div class="container4">
			<div class="row">
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>طريقة الدفع</label>
							<select id="paymentInput" class="form-control selectpicker style" data-live-search="true">
								<option value="" selected disabled hidden></option>
								<option value="0">نقدي</option>
								<option value="1">مستحقات</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label>القيمة المالية</label>
							<input name="amount" id="payment" type="number" class="form-control" placeholder="القيمة المالية">
						</div>
						<div class="form-group col-md-3">
							<label>رقم الايصال</label>
							<input name="bill_number" id="payment1" type="number" class="form-control" placeholder="رقم الايصال">
						</div>
						<div class="form-group col-md-3">
							<label>تاريخ الايصال</label>
							<input name="bill_date" id="payment2" type="date" class="form-control" placeholder="العمل الاضافي">
						</div>
					</div>
			</div>
			<div class="row">

				<div class="col-md-6">
					<div class="row">
							<div class="form-row">
								<div class="form-group col-md-12">
									<label>تاريخ انتهاء الرخصة</label>
									<input name="EXP_DT"type="date" class="form-control">
								</div>
							</div>
					</div>
				</div>
			</div>
				<div class="form-group">
					<label>ملاحظات</label>
					<textarea name="notes" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
				</div>
		</div>

	</div>
</div>

<div class="container6">
		<button type="submit" class="btn btn-outline-secondary btnn">حفظ</button>
		<button type="button" class="btn btn-outline-secondary btnn">ترحيل</button>
		<button type="button" class="btn btn-outline-secondary btnn">طلب جديد</button>
		<button type="button" class="btn btn-outline-secondary btnn">استعلام</button>
		<button type="button" class="btn btn-outline-secondary btnn">الاوراق الثبوتية</button>
		<button type="button" class="btn btn-outline-secondary btnn">طباعة الطلب</button>
		<button type="button" class="btn btn-outline-secondary btnn">عودة</button>

</div>
</form>

<!-- END PAGE CONTENT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>


<script>

$(document).ready(function(){
$('.selectpicker').selectpicker({
   'noneSelectedText':''
});
})


	$(document).on('change', '#paymentInput', function(e) {
		e.preventDefault();
		var inputState = $('#paymentInput').val();
		if (inputState == 1) {
			$('#payment').attr('disabled', 'disabled');
			$('#payment1').attr('disabled', 'disabled');
			$('#payment2').attr('disabled', 'disabled');

		} else {
			$('#payment').removeAttr('disabled');
			$('#payment1').removeAttr('disabled');
			$('#payment2').removeAttr('disabled');

		}
	})

	

//------------------------------------------------------------

	$(document).on('change', '#countryID', function (e) {
      e.preventDefault();
      var countryID = $('#countryID').val();
	  if (countryID){
      $.ajax({
		url: '/getbyNatId/' + countryID ,
		data:{"_token":"{{ csrf_token() }}"},
        dataTypes: 'json',
        type: 'get',
       
        success: function (data) {
         if (data) {
			$('#uniID').empty();
			$('#uniID').focus();
			$('#uniID').append('<option value="">اختر جامعة</option>'); 
            $.each(data, function(key, value){
              $('#uniID').append('<option value="'+ value.univ_code +'">' + value.univ_title+ '</option>');
			});
			$('#uniID').selectpicker('refresh');
		}
			else{
				$('#uniID').empty();
				$('#uniID').selectpicker('refresh');
			}
		}});
		}
		else{
			$('#uniID').empty();
			$('#uniID').selectpicker('refresh');

		}

	  }
	);


//------------------------------------------------------------

$(document).on('change', '#job', function (e) {
      e.preventDefault();
      var job = $('#job').val();
	  if (job){
      $.ajax({
		url: '/getbymajor/' + job ,
		data:{"_token":"{{ csrf_token() }}"},
        dataTypes: 'json',
        type: 'get',
       
        success: function (data) {
         if (data) {
			$('#major').empty();
			$('#major').focus();
			$('#major').append('<option value="">اختر </option>'); 
            $.each(data, function(key, value){
              $('#major').append('<option value="'+ key +'">' + value+ '</option>');
			});
			$('#major').selectpicker('refresh');
		}
			else{
				$('#major').empty();
				$('#major').selectpicker('refresh');
			}
		}});
		}
		else{
			$('#major').empty();
			$('#major').selectpicker('refresh');

		}

	  }
	);

/*
    function select_activity_id(data) {
      $("#activity_id").append('<option value=""></option>');
      $.each(data, function (index, value) {
        $("#activity_id").append('<option value=' + index + '>' + value + '</option>');
      });
      $('#activity_id').selectpicker('refresh');
    }
*/

	






		
</script>
@endsection