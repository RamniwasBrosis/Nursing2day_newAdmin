@extends('layouts.default')
@section('content')
			<div class="page-titles">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
					<li class="breadcrumb-item active" aria-current="page">Tab</li>
				  </ol>
				</nav>
			</div>
            <div class="container-fluid">
				<div class="col-xl-12">

				</div>
				<!--element-area -->
				<div class="element-area">
					<div class="demo-view">
						<div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
							<!-- row -->
							<div class="row">
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card">
										<div class="card-header flex-wrap border-0" id="default-tab">
											<h4 class="card-title">Default Tab</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#DefaultTab" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#DefaultTab-html" type="button" role="tab">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body pt-0">
													<!-- Nav tabs -->
													<div class="default-tab">
														<ul class="nav nav-tabs" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i> Home</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i> Profile</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#contact"><i class="la la-phone me-2"></i> Contact</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#message"><i class="la la-envelope me-2"></i> Message</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane fade show active" id="home" role="tabpanel">
																<div class="pt-4">
																	<h4>This is home title</h4>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																</div>
															</div>
															<div class="tab-pane fade" id="profile">
																<div class="pt-4">
																	<h4>This is profile title</h4>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																</div>
															</div>
															<div class="tab-pane fade" id="contact">
																<div class="pt-4">
																	<h4>This is contact title</h4>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																</div>
															</div>
															<div class="tab-pane fade" id="message">
																<div class="pt-4">
																	<h4>This is message title</h4>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="DefaultTab-html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;!-- Nav tabs --&gt;
&lt;div class="default-tab"&gt;
	&lt;ul class="nav nav-tabs" role="tablist"&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link active" data-bs-toggle="tab" href="#home"&gt;&lt;i class="la la-home me-2"&gt;&lt;/i&gt; Home&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link" data-bs-toggle="tab" href="#profile"&gt;&lt;i class="la la-user me-2"&gt;&lt;/i&gt; Profile&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link" data-bs-toggle="tab" href="#contact"&gt;&lt;i class="la la-phone me-2"&gt;&lt;/i&gt; Contact&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link" data-bs-toggle="tab" href="#message"&gt;&lt;i class="la la-envelope me-2"&gt;&lt;/i&gt; Message&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
	&lt;div class="tab-content"&gt;
		&lt;div class="tab-pane fade show active" id="home" role="tabpanel"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is home title&lt;/h4&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="tab-pane fade" id="profile"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is profile title&lt;/h4&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="tab-pane fade" id="contact"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is contact title&lt;/h4&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="tab-pane fade" id="message"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is message title&lt;/h4&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="custom-tab">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Custom Tab 1</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab1" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab1" data-bs-toggle="tab" data-bs-target="#DefaultTab1" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab1" data-bs-toggle="tab" data-bs-target="#DefaultTab1-html" type="button" role="tab">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent1">
											<div class="tab-pane fade show active" id="DefaultTab1" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body pt-0">
													<!-- Nav tabs -->
													<div class="custom-tab-1">
														<ul class="nav nav-tabs">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#home1"><i class="la la-home me-2"></i> Home</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#profile1"><i class="la la-user me-2"></i> Profile</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#contact1"><i class="la la-phone me-2"></i>  Contact</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#message1"><i class="la la-envelope me-2"></i> Message</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane fade show active" id="home1" role="tabpanel">
																<div class="pt-4">
																	<h4>This is home title</h4>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																</div>
															</div>
															<div class="tab-pane fade" id="profile1">
																<div class="pt-4">
																	<h4>This is profile title</h4>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																</div>
															</div>
															<div class="tab-pane fade" id="contact1">
																<div class="pt-4">
																	<h4>This is contact title</h4>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
																	</p>
																</div>
															</div>
															<div class="tab-pane fade" id="message1">
																<div class="pt-4">
																	<h4>This is message title</h4>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="DefaultTab1-html" role="tabpanel" aria-labelledby="home-tab1">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;!-- Nav tabs --&gt;
&lt;div class="custom-tab-1"&gt;
	&lt;ul class="nav nav-tabs"&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link active" data-bs-toggle="tab" href="#home1"&gt;&lt;i class="la la-home me-2"&gt;&lt;/i&gt; Home&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link" data-bs-toggle="tab" href="#profile1"&gt;&lt;i class="la la-user me-2"&gt;&lt;/i&gt; Profile&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link" data-bs-toggle="tab" href="#contact1"&gt;&lt;i class="la la-phone me-2"&gt;&lt;/i&gt;  Contact&lt;/a&gt;
		&lt;/li&gt;
		&lt;li class="nav-item"&gt;
			&lt;a class="nav-link" data-bs-toggle="tab" href="#message1"&gt;&lt;i class="la la-envelope me-2"&gt;&lt;/i&gt; Message&lt;/a&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
	&lt;div class="tab-content"&gt;
		&lt;div class="tab-pane fade show active" id="home1" role="tabpanel"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is home title&lt;/h4&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="tab-pane fade" id="profile1"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is profile title&lt;/h4&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="tab-pane fade" id="contact1"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is contact title&lt;/h4&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
				&lt;p&gt;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class="tab-pane fade" id="message1"&gt;
			&lt;div class="pt-4"&gt;
				&lt;h4&gt;This is message title&lt;/h4&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
				&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
				&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="nav-pills">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Nav Pills Tabs</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab3" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab3" data-bs-toggle="tab" data-bs-target="#NavPills" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab3" data-bs-toggle="tab" data-bs-target="#NavPills-html" type="button" role="tab">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent3">
											<div class="tab-pane fade show active" id="NavPills" role="tabpanel" aria-labelledby="home-tab3">
												<div class="card-body pt-0">
													<ul class="nav nav-pills mb-4 light">
														<li class=" nav-item">
															<a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">Tab One</a>
														</li>
														<li class="nav-item">
															<a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Tab Two</a>
														</li>
														<li class="nav-item">
															<a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Tab Three</a>
														</li>
													</ul>
													<div class="tab-content">
														<div id="navpills-1" class="tab-pane active">
															<div class="row">
																<div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
																	<p>
																		<br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
																</div>
															</div>
														</div>
														<div id="navpills-2" class="tab-pane">
															<div class="row">
																<div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
																	<p>
																		<br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
																</div>
															</div>
														</div>
														<div id="navpills-3" class="tab-pane">
															<div class="row">
																<div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
																	<p>
																		<br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
<div class="tab-pane fade" id="NavPills-html" role="tabpanel" aria-labelledby="home-tab3">
<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;ul class="nav nav-pills mb-4 light"&gt;
	&lt;li class=" nav-item"&gt;
		&lt;a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false"&gt;Tab One&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="nav-item"&gt;
		&lt;a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false"&gt;Tab Two&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="nav-item"&gt;
		&lt;a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true"&gt;Tab Three&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
	&lt;div id="navpills-1" class="tab-pane active"&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-md-12"&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
				&lt;p&gt;
					&lt;br /&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div id="navpills-2" class="tab-pane"&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-md-12"&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
				&lt;p&gt;
					&lt;br /&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div id="navpills-3" class="tab-pane"&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-md-12"&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
				&lt;p&gt;
					&lt;br /&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="nav-pills-tabs">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Nav Pills Tabs-2</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab4" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab4" data-bs-toggle="tab" data-bs-target="#NavPillsTabs" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab4" data-bs-toggle="tab" data-bs-target="#NavPillsTabs-html" type="button" role="tab">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent4">
											<div class="tab-pane fade show active" id="NavPillsTabs" role="tabpanel" aria-labelledby="home-tab4">
												<div class="card-body pt-0">
													<ul class="nav nav-pills justify-content-end mb-4">
														<li class=" nav-item">
															<a href="#navpills2-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">Tab One</a>
														</li>
														<li class="nav-item">
															<a href="#navpills2-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Tab Two</a>
														</li>
														<li class="nav-item">
															<a href="#navpills2-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Tab Three</a>
														</li>
													</ul>
													<div class="tab-content">
														<div id="navpills2-1" class="tab-pane active">
															<div class="row">
																<div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
																	<p>
																		<br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
																</div>
															</div>
														</div>
														<div id="navpills2-2" class="tab-pane">
															<div class="row">
																<div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
																	<p>
																		<br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
																</div>
															</div>
														</div>
														<div id="navpills2-3" class="tab-pane">
															<div class="row">
																<div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
																	<p>
																		<br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="NavPillsTabs-html" role="tabpanel" aria-labelledby="home-tab4">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;ul class="nav nav-pills justify-content-end mb-4"&gt;
	&lt;li class=" nav-item"&gt;
		&lt;a href="#navpills2-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false"&gt;Tab One&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="nav-item"&gt;
		&lt;a href="#navpills2-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false"&gt;Tab Two&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="nav-item"&gt;
		&lt;a href="#navpills2-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true"&gt;Tab Three&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
	&lt;div id="navpills2-1" class="tab-pane active"&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-md-12"&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
				&lt;p&gt;
					&lt;br /&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div id="navpills2-2" class="tab-pane"&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-md-12"&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
				&lt;p&gt;
					&lt;br /&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div id="navpills2-3" class="tab-pane"&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-md-12"&gt; Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
				&lt;p&gt;
					&lt;br /&gt; Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="vertical-nav">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Vertical Nav Pill</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab5" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab5" data-bs-toggle="tab" data-bs-target="#VerticalNav" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab5" data-bs-toggle="tab" data-bs-target="#VerticalNav-html" type="button" role="tab">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent5">
											<div class="tab-pane fade show active" id="VerticalNav" role="tabpanel" aria-labelledby="home-tab5">
												<div class="card-body pt-0">
													<div class="row">
														<div class="col-sm-4">
															<div class="nav flex-column nav-pills mb-3">
																<a href="#v-pills-home" data-bs-toggle="pill" class="nav-link active show">Home</a>
																<a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link">Profile</a>
																<a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link">Messages</a>
																<a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">Settings</a>
															</div>
														</div>
														<div class="col-sm-8">
															<div class="tab-content">
																<div id="v-pills-home" class="tab-pane fade active show">
																	<p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis
																		et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt
																		minim occaecat.
																	</p>
																</div>
																<div id="v-pills-profile" class="tab-pane fade">
																	<p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
																		velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
																		minim consectetur qui.
																	</p>
																</div>
																<div id="v-pills-messages" class="tab-pane fade">
																	<p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
																		et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
																</div>
																<div id="v-pills-settings" class="tab-pane fade">
																	<p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
																		qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="VerticalNav-html" role="tabpanel" aria-labelledby="home-tab">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="row"&gt;
	&lt;div class="col-sm-4"&gt;
		&lt;div class="nav flex-column nav-pills mb-3"&gt;
			&lt;a href="#v-pills-home" data-bs-toggle="pill" class="nav-link active show"&gt;Home&lt;/a&gt;
			&lt;a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link"&gt;Profile&lt;/a&gt;
			&lt;a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link"&gt;Messages&lt;/a&gt;
			&lt;a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link"&gt;Settings&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="col-sm-8"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div id="v-pills-home" class="tab-pane fade active show"&gt;
				&lt;p&gt;Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis
					et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt
					minim occaecat.
				&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="v-pills-profile" class="tab-pane fade"&gt;
				&lt;p&gt;Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
					velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
					minim consectetur qui.
				&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="v-pills-messages" class="tab-pane fade"&gt;
				&lt;p&gt;Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
					et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="v-pills-settings" class="tab-pane fade"&gt;
				&lt;p&gt;Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
					qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="vertical-nav-pill">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Vertical Nav Pill-2</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab6" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab6" data-bs-toggle="tab" data-bs-target="#VerticalNavPill" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab6" data-bs-toggle="tab" data-bs-target="#VerticalNavPill-html" type="button" role="tab" >HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent6">
											<div class="tab-pane fade show active" id="VerticalNavPill" role="tabpanel" aria-labelledby="home-tab6">
												<div class="card-body pt-0">
													<div class="row">
														<div class="col-sm-8">
															<div class="tab-content">
																<div id="v-pills-home1" class="tab-pane fade active show">
																	<p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis
																		et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt
																		minim occaecat.
																	</p>
																</div>
																<div id="v-pills-profile1" class="tab-pane fade">
																	<p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
																		velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
																		minim consectetur qui.
																	</p>
																</div>
																<div id="v-pills-messages1" class="tab-pane fade">
																	<p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
																		et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
																</div>
																<div id="v-pills-settings1" class="tab-pane fade">
																	<p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
																		qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="nav flex-column nav-pills">
																<a href="#v-pills-home1" data-bs-toggle="pill" class="nav-link active show">Home</a>
																<a href="#v-pills-profile1" data-bs-toggle="pill" class="nav-link">Profile</a>
																<a href="#v-pills-messages1" data-bs-toggle="pill" class="nav-link">Messages</a>
																<a href="#v-pills-settings1" data-bs-toggle="pill" class="nav-link">Settings</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="VerticalNavPill-html" role="tabpanel" aria-labelledby="home-tab6">
												<div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="row"&gt;
	&lt;div class="col-sm-8"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div id="v-pills-home1" class="tab-pane fade active show"&gt;
				&lt;p&gt;Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis
					et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt
					minim occaecat.
				&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="v-pills-profile1" class="tab-pane fade"&gt;
				&lt;p&gt;Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
					velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
					minim consectetur qui.
				&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="v-pills-messages1" class="tab-pane fade"&gt;
				&lt;p&gt;Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
					et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.&lt;/p&gt;
			&lt;/div&gt;
			&lt;div id="v-pills-settings1" class="tab-pane fade"&gt;
				&lt;p&gt;Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
					qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="col-sm-4"&gt;
		&lt;div class="nav flex-column nav-pills"&gt;
			&lt;a href="#v-pills-home1" data-bs-toggle="pill" class="nav-link active show"&gt;Home&lt;/a&gt;
			&lt;a href="#v-pills-profile1" data-bs-toggle="pill" class="nav-link"&gt;Profile&lt;/a&gt;
			&lt;a href="#v-pills-messages1" data-bs-toggle="pill" class="nav-link"&gt;Messages&lt;/a&gt;
			&lt;a href="#v-pills-settings1" data-bs-toggle="pill" class="nav-link"&gt;Settings&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
								<!-- Column  -->
								<div class="col-xl-12">
									<div class="card dz-card" id="tab-icon">
										<div class="card-header flex-wrap border-0">
											<h4 class="card-title">Tab with icon</h4>
											<ul class="nav nav-tabs dzm-tabs" id="myTab7" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab7" data-bs-toggle="tab" data-bs-target="#TabWithIcon" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab7" data-bs-toggle="tab" data-bs-target="#TabWithIcon-html" type="button" role="tab">HTML</button>
												</li>
											</ul>
										</div>
										<div class="tab-content" id="myTabContent7">
											<div class="tab-pane fade show active" id="TabWithIcon" role="tabpanel" aria-labelledby="home-tab7">
												<div class="card-body pt-0">
													<!-- Nav tabs -->
													<ul class="nav nav-tabs" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#home8">
																<span>
																	<i class="ti-home"></i>
																</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#profile8">
																<span>
																	<i class="ti-user"></i>
																</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#messages8">
																<span>
																	<i class="ti-email"></i>
																</span>
															</a>
														</li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content tabcontent-border">
														<div class="tab-pane fade show active" id="home8" role="tabpanel">
															<div class="pt-4">
																<h4>This is icon title</h4>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
																</p>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
																</p>
															</div>
														</div>
														<div class="tab-pane fade" id="profile8" role="tabpanel">
															<div class="pt-4">
																<h4>This is icon title</h4>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
																</p>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
																</p>
															</div>
														</div>
														<div class="tab-pane fade" id="messages8" role="tabpanel">
															<div class="pt-4">
																<h4>This is icon title</h4>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
																</p>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="TabWithIcon-html" role="tabpanel" aria-labelledby="home-tab7">
												<div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;!-- Nav tabs --&gt;
&lt;ul class="nav nav-tabs" role="tablist"&gt;
	&lt;li class="nav-item"&gt;
		&lt;a class="nav-link active" data-bs-toggle="tab" href="#home8"&gt;
			&lt;span&gt;
				&lt;i class="ti-home"&gt;&lt;/i&gt;
			&lt;/span&gt;
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="nav-item"&gt;
		&lt;a class="nav-link" data-bs-toggle="tab" href="#profile8"&gt;
			&lt;span&gt;
				&lt;i class="ti-user"&gt;&lt;/i&gt;
			&lt;/span&gt;
		&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class="nav-item"&gt;
		&lt;a class="nav-link" data-bs-toggle="tab" href="#messages8"&gt;
			&lt;span&gt;
				&lt;i class="ti-email"&gt;&lt;/i&gt;
			&lt;/span&gt;
		&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Tab panes --&gt;
&lt;div class="tab-content tabcontent-border"&gt;
	&lt;div class="tab-pane fade show active" id="home8" role="tabpanel"&gt;
		&lt;div class="pt-4"&gt;
			&lt;h4&gt;This is icon title&lt;/h4&gt;
			&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
			&lt;/p&gt;
			&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
			&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane fade" id="profile8" role="tabpanel"&gt;
		&lt;div class="pt-4"&gt;
			&lt;h4&gt;This is icon title&lt;/h4&gt;
			&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
			&lt;/p&gt;
			&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
			&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane fade" id="messages8" role="tabpanel"&gt;
		&lt;div class="pt-4"&gt;
			&lt;h4&gt;This is icon title&lt;/h4&gt;
			&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
			&lt;/p&gt;
			&lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
			&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Column  -->
							</div>
							<!-- /row -->
						</div>
					</div>
					<div class="demo-right ">
                        <div class="demo-right-inner dz-scroll " id="right-sidebar">
                            <h4 class="title">Tab</h4>
							<div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
								<ul class="navbar-nav" id="menu-bar">
									<li><a href="#default-tab" class="scroll">Default Tab</a></li>
									<li><a href="#custom-tab" class="scroll">Custom Tab-1</a></li>
									<li><a href="#nav-pills" class="scroll">Nav Pills Tabs</a></li>
									<li><a href="#nav-pills-tabs" class="scroll">Nav Pills Tabs-2</a></li>
									<li><a href="#vertical-nav" class="scroll">Vertical Nav Pill</a></li>
									<li><a href="#vertical-nav-pill" class="scroll">Vertical Nav Pill-2</a></li>
									<li><a href="#tab-icon" class="scroll">Tab with Icon</a></li>
								</ul>
							</div>
                        </div>
                    </div>
				</div>
				<!--/element-area-->
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
