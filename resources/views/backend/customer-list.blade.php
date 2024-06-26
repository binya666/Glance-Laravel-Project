@extends('backend.layouts.main')
@section('main-container')
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="d-flex flex-wrap mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addContactModal" class="btn btn-outline-primary  me-auto mb-2">Add New Customer</a>
							<!-- Add Order -->
							<div class="modal fade" id="addContactModal">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Add Contact</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal">
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="mb-3">
													<label class="form-label text-black">First Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="mb-3">
													<label class="form-label text-black">Last Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="mb-3">
													<label class="form-label text-black">Address</label>
													<input type="text" class="form-control">
												</div>
												<div class="">
													<button type="button" class="btn btn-primary">SAVE</button>
													<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<select class="form-control style-2 me-3 mb-2 default-select ">
								<option>Filter</option>
								<option>Date</option>
							</select>
							<select class="form-control style-2 mb-2 default-select ">
								<option>Newest</option>
								<option>Oldest</option>
							</select>
						</div>
						<div class="table-responsive">
							<table id="dataTable1" class="display mb-4 dataTablesCard card-table text-black customer-list-tbl">
								<thead>
									<tr class="bg-primary">
										<th class="sorting_1  pe-0 text-center bg-none no-data-img ">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="checkAll" required="">
												<label class="form-check-label" for="checkAll"></label>
											</div>
										</th>
										<th><strong class="font-w600 wspace-no">Customer ID</strong></th>
										<th><strong class="font-w600 wspace-no">Join Date</strong></th>
										<th><strong class="font-w600 wspace-no">Customer Name</strong></th>
										<th><strong class="font-w600 wspace-no">Location</strong></th>
										<th><strong class="font-w600 wspace-no">Total Spent</strong></th>
										<th><strong class="font-w600 wspace-no">Last Order</strong></th>
										<th class="bg-none"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox5" required="">
												<label class="form-check-label" for="customCheckBox5"></label>
											</div>
										</td>
										<td>#5552351</td>
										<td>26 March 2023, 12:42 AM</td>
										<td>James WItcwicky</td>
										<td>Corner Street 5th London</td>
										<td>$164.52</td>
										<td><span class="font-w600">$14.89</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
												<label class="form-check-label" for="customCheckBox6"></label>
											</div>
										</td>
										<td>#5552323</td>
										<td>20 April 2023, 12:42 AM</td>
										<td>Veronica</td>
										<td>21 King Street London</td>
										<td>$74.92</td>
										<td><span class="font-w600">$8.13</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
												<label class="form-check-label" for="customCheckBox7"></label>
											</div>
										</td>
										<td>#5552375</td>
										<td>10 June 2023, 02:12 AM</td>
										<td>Emilia Johanson</td>
										<td>67 St. John’s RoadLondon</td>
										<td>$251.16</td>
										<td><span class="font-w600">$21.55</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
												<label class="form-check-label" for="customCheckBox8"></label>
											</div>
										</td>
										<td>#5552311</td>
										<td>01 July 2023, 12:42 AM</td>
										<td>Olivia Shine</td>
										<td>35 Station Road London</td>
										<td>$82.46</td>
										<td><span class="font-w600">$42.85</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox9" required="">
												<label class="form-check-label" for="customCheckBox9"></label>
											</div>
										</td>
										<td>#5552388</td>
										<td>18 March 2023, 02:12 AM</td>
										<td>Jessica Wong</td>
										<td>11 Church Road</td>
										<td>$24.17	</td>
										<td><span class="font-w600">$11.41</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox11" required="">
												<label class="form-check-label" for="customCheckBox11"></label>
											</div>
										</td>
										<td>#5552358</td>
										<td>12 June 2023, 01:42 PM</td>
										<td>David Horison</td>
										<td>981 St. John’s Road London</td>
										<td>$24.55	</td>
										<td><span class="font-w600">$67.27</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox22" required="">
												<label class="form-check-label" for="customCheckBox22"></label>
											</div>
										</td>
										<td>#5552322</td>
										<td>28 May 2023, 12:42 AM</td>
										<td>Samantha Bake</td>
										<td>79 The Drive London</td>
										<td>$22.18</td>
										<td><span class="font-w600">$11.41</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox33" required="">
												<label class="form-check-label" for="customCheckBox33"></label>
											</div>
										</td>
										<td>#5552397</td>
										<td>17 October 2023, 02:12 AM</td>
										<td>Franky Sihotang</td>
										<td>6 The Avenue London`</td>
										<td>$45.86</td>
										<td><span class="font-w600">$91.68</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox44" required="">
												<label class="form-check-label" for="customCheckBox44"></label>
											</div>
										</td>
										<td>#5552349</td>
										<td>26 March 2023, 12:42 AM</td>
										<td>Roberto Carlo</td>
										<td>544 Manor Road London</td>
										<td>$34.41</td>
										<td><span class="font-w600">$11.41</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox55" required="">
												<label class="form-check-label" for="customCheckBox55"></label>
											</div>
										</td>
										<td>#5552356</td>
										<td>16 March 2023, 02:12 AM</td>
										<td>Rendy Greenlee</td>
										<td>32 The Green London</td>
										<td>$44.99</td>
										<td><span class="font-w600">$91.68</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="sorting_1 pe-0 text-center">
											<div class="form-check custom-checkbox ms-xl-4 ms-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox66" required="">
												<label class="form-check-label" for="customCheckBox66"></label>
											</div>
										</td>
										<td>#5552356</td>
										<td>20 November 2023, 02:12 AM</td>
										<td>Rendy Greenlee</td>
										<td>32 The Green London</td>
										<td>$44.99</td>
										<td><span class="font-w600">$14.89</span></td>
										<td>
											<div class="dropdown ms-auto c-pointer">
												<div class="btn-link" data-bs-toggle="dropdown" aria-expanded="false" role="button">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Accept order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													Reject order
													</a>
													<a class="dropdown-item text-black" href="javascript:void(0);">
													View Details
													</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>
        @endsection
