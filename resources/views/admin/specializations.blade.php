@extends('layouts.layout')
@section('header')
			<h3 class="page-title">
			نظام الاجازة والتراخيص <small>ثوابت التخصصات</small>
			</h3>
@endsection

@section('current-page')
	<a href="/specializations">ثوابت التخصصات</a>
@endsection
@section('content')
			<!-- BEGIN PAGE CONTENT-->
            <div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> اضافة / تعديل تخصص  
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<div class="row">
										<form>
											<div class="form-row">
												
													<div class="form-group col-md-6">
														<label>رمز التخصص</label>
														<input type="text" class="form-control" placeholder="رمز التخصص">
													</div>
											</div>
										</form>
						</div>
												
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>اسم التخصص بالعربية</label>
										<input type="text" class="form-control" placeholder="اسم التخصص بالعربية">
									</div>
									<div class="form-group col-md-6">
										<label>اسم التخصص بالانجليزية</label>
										<input type="text" class="form-control" placeholder="اسم التخصص بالانجليزية">
									</div>
								</div>
							</form>
						</div>

							<div class="row">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>مدة التخصص</label>
											<input type="text" class="form-control" placeholder="مدة التخصص">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>المهنة بالعربية</label>
											<input type="text" class="form-control" placeholder="المهنة بالعربية">
										</div>
										<div class="form-group col-md-6">
											<label>المهنة بالانجليزية</label>
											<input type="text" class="form-control" placeholder="المهنة بالانجليزية">
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
						<i class="fa fa-gift"></i> البحث 
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<form>
							<div class="form-group row">
							<label  class="col-sm-1 col-form-label">التخصص </label>
							<div class="col-sm-3">
								<select id="inputState" class="form-control">
									<option selected>....</option>
									<option>...</option>
									<option>...</option>
								</select>
							</div>
							
								<button type="button" class="btn btn-outline-secondary btnn">بحث</button> 
							</div>
						</form>
					</div>
				</div>
			</div>
			



			<div class="portlet box green">
				<div class="portlet-title box2">
					<div class="caption">
						<i class="fa fa-globe"></i>التخصصات
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<table class="table table-striped table-hover" id="sample_5">
					<thead>
					<tr>
						<th>
							رمز التخصص
						</th>
						<th>
							 الاسم بالعربية
						</th>
						<th class="hidden-xs">
							الاسم بالانجليزية
						</th>
						<th>
							المهنة بالعربية
					   </th>
					   <th class="hidden-xs">
						المهنة بالانجليزية
					   </th>
					   <th class="hidden-xs">
						   مدة التخصص  
					   </th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 1
						</td>
						<td>
							125646
						</td>
						<td>
							 123456789
						</td>
						<td>
							125646
						</td>
						<td>
							125646
						</td>
						<td>
							 123456789
						</td>
						
						
					</tr>
					<tr>
						<td>
							 1
						</td>
						<td>
							125646
						</td>
						<td>
							 123456789
						</td>
						<td>
							125646
						</td>
						<td>
							125646
						</td>
						<td>
							 123456789
						</td>
						
					</tr>
					
				
					</tbody>
					</table>
				</div>
			
			</div>

			<div class="container6">
				<form>
					<button type="button" class="btn btn-outline-secondary btnn">جديد</button>
					<button type="button" class="btn btn-outline-secondary btnn">حفظ</button>
					<button type="button" class="btn btn-outline-secondary btnn">مسح البيانات</button>
					<button type="button" class="btn btn-outline-secondary btnn">اضافة مهنة</button>
					<button type="button" class="btn btn-outline-secondary btnn">عودة </button>
				</form>
			</div>
			<!-- END PAGE CONTENT-->
@endsection