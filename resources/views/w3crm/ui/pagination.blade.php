@extends('layouts.default')
@section('content')
			<div class="page-titles">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
					<li class="breadcrumb-item active" aria-current="page">Pagination</li>
				  </ol>
				</nav>
			</div>
            <div class="container-fluid">
				<div class="col-xl-12">

				</div>
				<!--element-area-->
				<div class="element-area">
					<div class="demo-view">
						<div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
							<!-- row -->
							<div class="row">
								<div class="col-xl-12 ">
									<div class="card dz-card" id="default-pagination">
										<div class="card-header flex-wrap border-0 ">
											<div>
												<h4 class="card-title">Pagination</h4>
												<p class="mb-0 subtitle">Default pagination style</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#DefaultPagination" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#DefaultPagination-html" type="button" role="tab" aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="DefaultPagination" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0">
													<nav>
														<ul class="pagination">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>

													<nav>
														<ul class="pagination pagination-sm">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>

													<nav>
														<ul class="pagination pagination-xs">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="tab-pane fade " id="DefaultPagination-html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body p-0 code-area">
			<pre class="m-0"><code class="language-html">&lt;nav&gt;
				&lt;ul class="pagination"&gt;
					&lt;li class="page-item page-indicator"&gt;
						&lt;a class="page-link" href="javascript:void(0)"&gt;
							&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item page-indicator"&gt;
						&lt;a class="page-link" href="javascript:void(0)"&gt;
							&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt;

			&lt;nav&gt;
				&lt;ul class="pagination pagination-sm"&gt;
					&lt;li class="page-item page-indicator"&gt;
						&lt;a class="page-link" href="javascript:void(0)"&gt;
							&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item page-indicator"&gt;
						&lt;a class="page-link" href="javascript:void(0)"&gt;
							&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt;

			&lt;nav&gt;
				&lt;ul class="pagination pagination-xs"&gt;
					&lt;li class="page-item page-indicator"&gt;
						&lt;a class="page-link" href="javascript:void(0)"&gt;
							&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
					&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
					&lt;li class="page-item page-indicator"&gt;
						&lt;a class="page-link" href="javascript:void(0)"&gt;
							&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
			&lt;/nav&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-12 ">
									<div class="card dz-card" id="pagination-gutter" >
										<div class="card-header flex-wrap border-0 ">
											<div>
											<h4 class="card-title">Pagination Gutter</h4>
											<p class="mb-0 subtitle">add <code>.pagination-gutter</code> to change the style</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab1" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab1" data-bs-toggle="tab" data-bs-target="#PaginationGutter" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab1" data-bs-toggle="tab" data-bs-target="#PaginationGutter-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent1">
											<div class="tab-pane fade show active" id="PaginationGutter" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body pt-0">
													<nav>
														<ul class="pagination pagination-gutter">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-sm pagination-gutter">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-xs pagination-gutter">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="tab-pane fade " id="PaginationGutter-html" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body p-0 code-area">
	<pre class="m-0"><code class="language-html">&lt;nav&gt;
		&lt;ul class="pagination pagination-gutter"&gt;
			&lt;li class="page-item page-indicator"&gt;
				&lt;a class="page-link" href="javascript:void(0)"&gt;
					&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item page-indicator"&gt;
				&lt;a class="page-link" href="javascript:void(0)"&gt;
					&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/nav&gt;
	&lt;nav&gt;
		&lt;ul class="pagination pagination-sm pagination-gutter"&gt;
			&lt;li class="page-item page-indicator"&gt;
				&lt;a class="page-link" href="javascript:void(0)"&gt;
					&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item page-indicator"&gt;
				&lt;a class="page-link" href="javascript:void(0)"&gt;
					&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/nav&gt;
	&lt;nav&gt;
		&lt;ul class="pagination pagination-xs pagination-gutter"&gt;
			&lt;li class="page-item page-indicator"&gt;
				&lt;a class="page-link" href="javascript:void(0)"&gt;
					&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
			&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
			&lt;li class="page-item page-indicator"&gt;
				&lt;a class="page-link" href="javascript:void(0)"&gt;
					&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/nav&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-xl-12 ">
									<div class="card dz-card" id="pagination-color">
										<div class="card-header flex-wrap border-0 ">
											<div>
												<h4 class="card-title">Pagination Color</h4>
												<p class="mb-0 subtitle">add <code>.pagination-gutter</code> to change the style</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab2" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab2" data-bs-toggle="tab" data-bs-target="#PaginationColor" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab2" data-bs-toggle="tab" data-bs-target="#PaginationColor-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent2">
											<div class="tab-pane fade show active" id="PaginationColor" role="tabpanel" aria-labelledby="home-tab2">
												<div class="card-body pt-0">
													<nav>
														<ul class="pagination pagination-gutter pagination-primary no-bg">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-gutter pagination-danger">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-sm pagination-gutter pagination-info">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-xs pagination-gutter  pagination-warning">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="tab-pane fade " id="PaginationColor-html" role="tabpanel" aria-labelledby="home-tab2">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;nav&gt;
	&lt;ul class="pagination pagination-gutter pagination-primary no-bg"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item "&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;
&lt;nav&gt;
	&lt;ul class="pagination pagination-gutter pagination-danger"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;
&lt;nav&gt;
	&lt;ul class="pagination pagination-sm pagination-gutter pagination-info"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;
&lt;nav&gt;
	&lt;ul class="pagination pagination-xs pagination-gutter  pagination-warning"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12 ">
									<div class="card dz-card" id="pagination-circle">
										<div class="card-header flex-wrap border-0 ">
											<div>
												<h4 class="card-title">Pagination Circle</h4>
												<p class="mb-0 subtitle">add <code>.pagination-circle</code> to change the style</p>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab3" data-bs-toggle="tab" data-bs-target="#PaginationCircle" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab3" data-bs-toggle="tab" data-bs-target="#PaginationCircle-html" type="button" role="tab"  aria-selected="false">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent3">
											<div class="tab-pane fade show active" id="PaginationCircle" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body pt-0">
													<nav>
														<ul class="pagination pagination-circle">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-sm pagination-circle">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
													<nav>
														<ul class="pagination pagination-xs pagination-circle">
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-left"></i></a>
															</li>
															<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
															<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
															<li class="page-item page-indicator">
																<a class="page-link" href="javascript:void(0)">
																	<i class="la la-angle-right"></i></a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="tab-pane fade " id="PaginationCircle-html" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;nav&gt;
	&lt;ul class="pagination pagination-circle"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;
&lt;nav&gt;
	&lt;ul class="pagination pagination-sm pagination-circle"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;
&lt;nav&gt;
	&lt;ul class="pagination pagination-xs pagination-circle"&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-left"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;1&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li class="page-item page-indicator"&gt;
			&lt;a class="page-link" href="javascript:void(0)"&gt;
				&lt;i class="la la-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /row -->
						</div>
					</div>
					<div class="demo-right ">
                        <div class="demo-right-inner dz-scroll " id="right-sidebar">
                            <h4 class="title">Pagination</h4>
							<div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
								<ul class="navbar-nav" id="menu-bar">
									<li><a href="#default-pagination" class="scroll">Default Pagination</a></li>
									<li><a href="#pagination-gutter" class="scroll">Pagination Gutter</a></li>
									<li><a href="#pagination-color" class="scroll">Pagination Color</a></li>
									<li><a href="#pagination-circle" class="scroll">Pagination Circle</a></li>
								</ul>
							</div>
                        </div>
                    </div>
				</div>

            </div>
       @endsection
       @push('scripts')
        <script>
                hljs.highlightAll();
                hljs.configure({ ignoreUnescapedHTML: true })



                document.addEventListener('DOMContentLoaded', (event) => {
                    document.querySelectorAll('pre code').forEach((el) => {
                        hljs.highlightElement(el);
                    });
                    });
            </script>
       @endpush

</body>
</html>
