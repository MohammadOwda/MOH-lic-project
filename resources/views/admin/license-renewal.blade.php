@extends('layouts.layout')
@section('header')
			<h3 class="page-title">
			نظام الاجازة والتراخيص <small>تجديد مزاولة</small>
			</h3>
@endsection

@section('current-page')
	<a href="/license-renewal">تجديد مزاولة</a>
@endsection
@section('content')
			<!-- BEGIN PAGE CONTENT-->
            
			<div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> بيانات الطلب
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<form>
							<div class="form-group row">
								<label  class="col-sm-1 col-form-label">رقم الطلب</label>
								<div class="col-sm-2">
									<input type="number" class="form-control"  placeholder="رقم الطلب">
								</div>
								<label  class="col-sm-1 col-form-label">رقم مزاولة المهنة</label>
								<div class="col-sm-2">
									<input type="number" class="form-control"  placeholder="رقم مزاولة المهنة">
								</div>
								<label  class="col-sm-1 col-form-label">رقم الهوية </label>
								<div class="col-sm-2">
									<input type="number" class="form-control"  placeholder="رقم الهوية ">
								</div>
									<button type="button" class="btn btn-outline-secondary btnn">استعلام</button> 
							</div>
						</form>
					</div>
					<div class="container1">
						<form>
							<div class="form-group row">
								<label  class="col-sm-1 col-form-label">الاسم </label>
								<div class="col-sm-2">
									<input type="text" class="form-control"  placeholder="الاسم ">
								</div>
								<label  class="col-sm-1 col-form-label">اسم الأب  </label>
								<div class="col-sm-2">
									<input type="text" class="form-control"  placeholder="اسم الأب    ">
								</div>
								<label  class="col-sm-1 col-form-label">اسم الجد  </label>
								<div class="col-sm-2">
									<input type="text" class="form-control"  placeholder="اسم الجد   ">
								</div>
								<label  class="col-sm-1 col-form-label">العائلة  </label>
								<div class="col-sm-2">
									<input type="text" class="form-control"  placeholder="العائلة  ">
								</div>
							</div>
							<div class="btnn1">
								<button type="button" class="btn btn-outline-secondary btnn">بحث</button> 
							</div>
						</form>
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
					<div class="container1">
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label>نوع الوثيقة</label>
										<select id="inputState" class="form-control">
											<option selected>Choose...</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>تاريخ التسجيل</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group col-md-4">
										<label>رقم الهوية/الوثيقة/التصريح</label>
										<input type="number" class="form-control" placeholder="رقم الهوية/الوثيقة/التصريح">
									</div>
								</div>
							</form>
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>الاسم</label>
										<input type="text" class="form-control" placeholder="الاسم">
									</div>
									<div class="form-group col-md-3">
										<label>اسم الأب</label>
										<input type="text" class="form-control" placeholder="اسم الأب">
									</div>
									<div class="form-group col-md-3">
										<label>اسم الجد</label>
										<input type="text" class="form-control" placeholder="اسم الجد">
									</div>
									<div class="form-group col-md-3">
										<label>العائلة</label>
										<input type="text" class="form-control" placeholder="العائلة">
									</div>
								</div>
							</form>
						</div>
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>الجنس</label>
										<select id="inputState" class="form-control">
											<option selected>ذكر</option>
											<option>أنثى</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>الحالة الاجتماعية</label>
										<select id="inputState" class="form-control">
											<option selected>أعزب</option>
											<option>متزوج</option>
											<option>...</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>تاريخ الميلاد</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group col-md-3">
										<label>مكان الميلاد</label>
										<input type="text" class="form-control" placeholder="مكان الميلاد">
									</div>
								</div>	
							</form>
							</div>
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>الجنسية</label>
										<select id="inputState" class="form-control">
											<option selected>...</option>
											<option>..</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>رقم الهاتف</label>
										<input type="number" class="form-control" placeholder="رقم الهاتف">
									</div>
									<div class="form-group col-md-3">
										<label>رقم الجوال</label>
										<input type="number" class="form-control" placeholder="رقم الجوال">
									</div>
									<div class="form-group col-md-3">
										<label>عنوان السكن</label>
										<input type="text" class="form-control" placeholder="عنوان السكن">
									</div>
								</div>	
							</form>
						</div>
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>العمل الحالي</label>
										<input type="text" class="form-control" placeholder="العمل الحالي">
									</div>
									<div class="form-group col-md-6">
										<label>العمل الاضافي</label>
										<input type="text" class="form-control" placeholder="العمل الاضافي">
									</div>

									<div class="form-row">
									<div class="form-group col-md-6">
										<label>المزاولة</label>
										<input type="text" class="form-control" placeholder="المزاولة ">
									</div>
									<div class="form-group col-md-6">
										<label> تاريخ التسجيل</label>
										<input type="date" class="form-control">
									</div>
								</div>	
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>

			
			<div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> بيانات المؤهل
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<div class="row">
							<form >
								<div class="container3">
						 
									<div class="row">
										<form>
											<div class="form-row">
												<div class="form-group col-md-4">
													<label>الدولة</label>
													<select id="inputState" class="form-control">
														<option selected>...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-4">
													<label>الجامعة</label>
													<select id="inputState" class="form-control">
														<option selected>...</option>
														<option>...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-4">
													<label>المؤهل العلمي</label>
													<select id="inputState" class="form-control">
														<option selected>...</option>
														<option>...</option>
														<option>...</option>
													</select>
												</div>
												
											</div>	
										</form>
									</div>
									<div class="row">
										<form>
											<div class="form-row">
												<div class="form-group col-md-4">
													<label>التخصص</label>
													<select id="inputState" class="form-control">
														<option selected>...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-4">
													<label>تاريخ التخرج</label>
													<input type="date" class="form-control">
												</div>
											</div>	
										</form>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<div class="container6">
				<form>
					<button type="button" class="btn btn-outline-secondary btnn">حفظ</button>
					<button type="button" class="btn btn-outline-secondary btnn">مسح البيانات</button>
					<button type="button" class="btn btn-outline-secondary btnn">طباعة</button>
					<button type="button" class="btn btn-outline-secondary btnn">عودة</button>
					
				</form>
			</div>
			<!-- END PAGE CONTENT-->
@endsection