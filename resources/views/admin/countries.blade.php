@extends('layouts.layout')
@section('header')
			<h3 class="page-title">
			نظام الاجازة والتراخيص <small>ثوابت الدول</small>
			</h3>
@endsection

@section('current-page')
	<a href="/countries">ثوابت الدول</a>
@endsection
@section('content')
			<!-- BEGIN PAGE CONTENT-->
            <div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> اضافة / تعديل دولة  
					</div>
					
				</div>
				<div class="portlet-body form">
					<div class="container1">
						<div class="row">
										<form>
											<div class="form-row">
												
													<div class="form-group col-md-6">
														<label>رمز الدولة</label>
														<input type="text" class="form-control" placeholder="رمز الدولة">
													</div>
											</div>
										</form>
						</div>
												
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>اسم الدولة بالعربية</label>
										<input type="text" class="form-control" placeholder="اسم الدولة بالعربية">
									</div>
									<div class="form-group col-md-6">
										<label>اسم الدولة بالانجليزية</label>
										<input type="text" class="form-control" placeholder="اسم الدولة بالانجليزية">
									</div>
								</div>
							</form>
						</div>

							
							<div class="row">
								<form>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>الجنسية بالعربية</label>
											<input type="text" class="form-control" placeholder="الجنسية بالعربية">
										</div>
										<div class="form-group col-md-6">
											<label>الجنسية بالانجليزية</label>
											<input type="text" class="form-control" placeholder="الجنسية بالانجليزية">
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
							<label  class="col-sm-1 col-form-label">الدولة </label>
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
						<i class="fa fa-globe"></i>الدول
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
							رمز الدولة
						</th>
						<th>
							 الاسم بالعربية
						</th>
						<th class="hidden-xs">
							الاسم بالانجليزية
						</th>
						<th class="hidden-xs">
							الجنسية بالعربية
						</th>
						<th class="hidden-xs">
							الجنسية بالانجليزية
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
					<button type="button" class="btn btn-outline-secondary btnn left-corner">عودة </button>
				</form>
			</div>
			<!-- END PAGE CONTENT-->
@endsection