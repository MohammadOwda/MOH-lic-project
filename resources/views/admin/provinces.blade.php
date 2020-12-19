@extends('layouts.layout')
@section('header')
			<h3 class="page-title">
			نظام الاجازة والتراخيص <small>ثوابت المحافظات</small>
			</h3>
@endsection

@section('current-page')
	<a href="/provinces">ثوابت المحافظات </a>
@endsection
@section('content')
			<!-- BEGIN PAGE CONTENT-->
            <div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> استعلام 
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
							
								<button type="button" class="btn btn-outline-secondary btnn">استعلام</button> 
							</div>
						</form>
					</div>
				</div>
			</div>
			

			<div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> بيانات الدولة 
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

					</div>
				</div>
			</div>

			<div class="portlet box green">
				<div class="portlet-title box2">
					<div class="caption">
						<i class="fa fa-globe"></i>اضافة / تعديل المحافظات 
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
							رمز المحافظة
						</th>
						<th>
							 اسم المحافظة بالعربية
						</th>
						<th class="hidden-xs">
							اسم المحافظة بالانجليزية
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
						
					</tr>
					
				
					</tbody>
					</table>
				</div>
			
			</div>

			<div class="container6">
				<form>
					<button type="button" class="btn btn-outline-secondary btnn">حفظ</button>
					<button type="button" class="btn btn-outline-secondary btnn">مسح البيانات</button>
					<button type="button" class="btn btn-outline-secondary btnn">عودة </button>
				</form>
			</div>
			<!-- END PAGE CONTENT-->
@endsection