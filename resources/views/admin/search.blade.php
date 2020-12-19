@extends('layouts.layout')
@section('header')
			<h3 class="page-title">
			نظام الاجازة والتراخيص <small>استعلام مزاولة</small>
			</h3>
@endsection

@section('current-page')
	<a href="/search">استعلام مزاولة</a>
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

						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>رقم الطلب</label>
										<input type="text" class="form-control" placeholder="رقم الطلب">
									</div>
									<div class="form-group col-md-3">
										<label>رقم المزاولة</label>
										<input type="text" class="form-control" placeholder="رقم المزاولة">
									</div>
									<div class="form-group col-md-3">
										<label>رقم الهوية</label>
										<input type="text" class="form-control" placeholder="رقم الهوية">
									</div>
									<div class="form-group col-md-3">
										<label>الاسم</label>
										<input type="text" class="form-control" placeholder="الاسم">
									</div>
								</div>
							</form>
						</div>

						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>الدولة</label>
										<input type="text" class="form-control" placeholder="الدولة">
									</div>
									<div class="form-group col-md-3">
										<label>المهنة</label>
										<input type="text" class="form-control" placeholder="المهنة">
									</div>
									<div class="form-group col-md-3">
										<label>الجامعة</label>
										<input type="text" class="form-control" placeholder="الجامعة">
									</div>
									<div class="form-group col-md-3">
										<label>التخصص</label>
										<input type="text" class="form-control" placeholder="التخصص">
									</div>
								</div>
							</form>
						</div>
						
						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>المؤهل</label>
										<input type="text" class="form-control" placeholder="المؤهل">
									</div>
									<div class="form-group col-md-3">
										<label>مكان العمل</label>
										<input type="text" class="form-control" placeholder="مكان العمل">
									</div>
									<div class="form-group col-md-3">
										<label>عنوان السكن</label>
										<input type="text" class="form-control" placeholder="عنوان السكن">
									</div>
									<div class="form-group col-md-3">
										<label>الجنس</label>
										<input type="text" class="form-control" placeholder="الجنس">
									</div>
								</div>
							</form>
						</div>

						<div class="row">
							<form>
								<div class="form-row">
									<div class="form-group col-md-3">
										<label>تاريخ الاصدار</label>
										<label>من</label>
										<input type="text" class="form-control" placeholder="من">
									</div>
									<div class="form-group col-md-3">
										<label>الى</label>
										<input type="text" class="form-control" placeholder="الى">
									</div>
								</div>
							</form>
						</div>

						<div class="row">
							<form >
								<div class="form-row">
									<div class="form-group col-md-1">
										<button type="button" class="btn btn-outline-secondary btnn">استعلام</button> 
									</div>
								</div>
							</form>
							
						</div>

						
						
						
					</div>
				</div>
			</div>

			<div class="portlet box green box1">
				<div class="portlet-title box2">
					<div class="caption">
						<i class="fa fa-globe"></i>نتائج البحث
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
							رقم الطلب
						</th>
						<th>
							 رقم المزاولة
						</th>
						<th class="hidden-xs">
							رقم الهوية
						</th>
						<th class="hidden-xs">
							الاسم
						</th>
						<th class="hidden-xs">
							 الجنس
						</th>
						<th class="hidden-xs">
							الدولة
					   </th>
					   <th class="hidden-xs">
							الجامعة
						</th>
						<th class="hidden-xs">
							التخصص
						</th>
						<th class="hidden-xs">
							المؤهل
						</th>
						<th class="hidden-xs">
							تاريخ الاصدار
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
							 احمد
						</td>
						<td>
							ذكر
						</td>
						<td>
							فلسطين
						</td>
						<td>
							الاسلامية
						</td>
						<td>
							هندسة حاسوب
						</td>
						<td>
							-
						</td>
						<td>
							2018
						</td>
					</tr>
					<tr>
						<td>
							 2
						</td>
						<td>
							2
						</td>
						<td>
							 2
						</td>
						<td>
							 2
						</td>
						<td>
							 2
						</td>
						<td>
							2
					   </td>
					   <td>
							2
				   	  </td>
				       <td>
							2
					  </td>
					  <td>
							2
						 </td>
						 <td>
							2
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
							 احمد
						</td>
						<td>
							ذكر
						</td>
						<td>
							فلسطين
						</td>
						<td>
							الاسلامية
						</td>
						<td>
							هندسة حاسوب
						</td>
						<td>
							-
						</td>
						<td>
							2018
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
							 احمد
						</td>
						<td>
							ذكر
						</td>
						<td>
							فلسطين
						</td>
						<td>
							الاسلامية
						</td>
						<td>
							هندسة حاسوب
						</td>
						<td>
							-
						</td>
						<td>
							2018
						</td>
					</tr>
				
					</tbody>
					</table>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
@endsection