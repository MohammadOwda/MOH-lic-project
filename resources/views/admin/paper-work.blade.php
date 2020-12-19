@extends('layouts.layout')
@section('header')
			<h3 class="page-title">
			نظام الاجازة والتراخيص <small>الأوراق الثبوتية </small>
			</h3>
@endsection

@section('current-page')
	<a href="/paper-work">الأوراق الثبوتية </a>
@endsection
@section('content')
			<!-- BEGIN PAGE CONTENT-->
            <div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> البيانات الشخصية
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<form>
							<div class="form-group row">
								<label  class="col-sm-1 col-form-label">رقم الطلب</label>
								<div class="col-sm-3">
									<input type="number" class="form-control"  placeholder="رقم الطلب">
								</div>
								<label  class="col-sm-1 col-form-label">رقم مزاولة المهنة</label>
								<div class="col-sm-3">
									<input type="number" class="form-control"  placeholder="رقم مزاولة المهنة">
								</div>
									<button type="button" class="btn btn-outline-secondary btnn">استعلام</button> 
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> بيانات المزاولة
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>رقم الطلب</label>
										<input type="number" class="form-control" placeholder="رقم الطلب">
									</div>
									<div class="form-group col-md-6">
										<label>رقم مزاولة المهنة</label>
										<input type="number" class="form-control" placeholder="رقم مزاولة المهنة">
									</div>
								</div>
							</form>
						</div>
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>الاسم</label>
										<input type="text" class="form-control" placeholder="الاسم">
									</div>
									<div class="form-group col-md-6">
										<label>العنوان</label>
										<input type="text" class="form-control" placeholder="العنوان">
									</div>
								</div>
							</form>
						</div>
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>الجامعة</label>
										<input type="text" class="form-control" placeholder="الجامعة">
									</div>
									<div class="form-group col-md-6">
										<label>التخصص</label>
										<input type="text" class="form-control" placeholder="التخصص">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> الاوراق الثبوتية
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
									صورة طبق الأصل عن الشهادة الجامعية
									</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
									صورة عن كشف الدرجات مصدق
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										صورة طبق الأصل عن شهادة الثانوية العامة
									</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										شهادة عضوية النقابة
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										صورة شخصية عدد 2
									</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										صورة الهوية أو جواز السفر
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										صورة عن معادلة من التعليم العالي مصدقة
									</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										شهادة ميلاد
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										شهادة تدريب في مؤسسة صيدلانية
									</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										صورة عن اجتياز الامتحان المقرر
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										صورة عن شهادة الامتياز مصدقة
									</label>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
									<label class="form-check-label" for="defaultCheck2">
										صورة عن امتحان المجلس الطبي مصدق
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" >
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										دفع الرسوم
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container2">
				<button type="button" class="btn btn-outline-secondary btnn">حفظ</button>
				<button type="button" class="btn btn-outline-secondary btnn">مسح البيانات</button>
				<button type="button" class="btn btn-outline-secondary btnn">عودة</button>
			</div>
			<!-- END PAGE CONTENT-->
@endsection