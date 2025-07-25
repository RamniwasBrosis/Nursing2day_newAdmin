@extends('layouts.default')
@section('content')
<div class="page-titles">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item ps-0"><a href="#">Bootstrap</a></li>
        <li class="breadcrumb-item active" aria-current="page">Button Group</li>
        </ol>
    </nav>
</div>
<div class="container-fluid">
    <div class="row ">
        <div class="col-xl-12">

        </div>
    </div>
        <!--element-area-->
    <div class="element-area">
        <div class="demo-view">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                <!-- row -->
                <div class="row">
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="button-group">
                            <div class="card-header d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Button group</h4>
                                    <p class="mb-0 subtitle">Default Button group style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#ButtonGroup" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#ButtonGroup-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="ButtonGroup" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body pt-0">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Left</button>
                                            <button type="button" class="btn btn-primary">Middle</button>
                                            <button type="button" class="btn btn-primary">Right</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ButtonGroup-html" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="btn-group"&gt;
&lt;button type="button" class="btn btn-primary"&gt;Left&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Middle&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="button-toolbar">
                            <div class="card-header d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Button toolbar</h4>
                                    <p class="mb-0 subtitle">Default Button toolbar style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-1" data-bs-toggle="tab" data-bs-target="#ButtonToolbar" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-1" data-bs-toggle="tab" data-bs-target="#ButtonToolbar-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-1">
                                <div class="tab-pane fade show active" id="ButtonToolbar" role="tabpanel" aria-labelledby="home-tab-1">
                                    <div class="card-body pt-0">
                                        <div class="btn-group me-2 mb-2">
                                            <button type="button" class="btn btn-primary">1</button>
                                            <button type="button" class="btn btn-primary">2</button>
                                            <button type="button" class="btn btn-primary">3</button>
                                            <button type="button" class="btn btn-primary">4</button>
                                        </div>
                                        <div class="btn-group me-2 mb-2">
                                            <button type="button" class="btn btn-primary">5</button>
                                            <button type="button" class="btn btn-primary">6</button>
                                            <button type="button" class="btn btn-primary">7</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-primary">8</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="ButtonToolbar-html" role="tabpanel" aria-labelledby="home-tab-1">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="btn-group me-2 mb-2"&gt;
&lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;3&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;4&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group me-2 mb-2"&gt;
&lt;button type="button" class="btn btn-primary"&gt;5&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;6&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;7&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group mb-2"&gt;
&lt;button type="button" class="btn btn-primary"&gt;8&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="button-sizing">
                            <div class="card-header d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Button Sizing</h4>
                                    <p class="mb-0 subtitle">Default button size style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-2" data-bs-toggle="tab" data-bs-target="#ButtonSizing" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#ButtonSizing-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-2">
                                <div class="tab-pane fade show active" id="ButtonSizing" role="tabpanel" aria-labelledby="home-tab-2">
                                    <div class="card-body pt-0">
                                        <div class="btn-group mb-2 btn-group-lg">
                                            <button class="btn btn-primary" type="button">Left</button>
                                            <button class="btn btn-primary" type="button">Middle</button>
                                            <button class="btn btn-primary" type="button">Right</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button class="btn btn-primary" type="button">Left</button>
                                            <button class="btn btn-primary" type="button">Middle</button>
                                            <button class="btn btn-primary" type="button">Right</button>
                                        </div>
                                        <div class="btn-group mb-2 btn-group-sm">
                                            <button class="btn btn-primary" type="button">Left</button>
                                            <button class="btn btn-primary" type="button">Middle</button>
                                            <button class="btn btn-primary" type="button">Right</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="ButtonSizing-html" role="tabpanel" aria-labelledby="home-tab-2">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"> <code class="language-html">&lt;div class="btn-group mb-2 btn-group-lg"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group mb-2"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class="btn-group mb-2 btn-group-sm"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Left&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Middle&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card dz-card" id="button-nesting">
                            <div class="card-header d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Button Nesting</h4>
                                    <p class="mb-0 subtitle">Default button nesting style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-3" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-3" data-bs-toggle="tab" data-bs-target="#ButtonNesting" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#ButtonNesting-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-3">
                                <div class="tab-pane fade show active" id="ButtonNesting" role="tabpanel" aria-labelledby="home-tab-3">
                                    <div class="card-body pt-0">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">1</button>
                                            <button type="button" class="btn btn-primary">2</button>
                                            <div class="btn-group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="ButtonNesting-html" role="tabpanel" aria-labelledby="home-tab-3">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="btn-group"&gt;
&lt;button type="button" class="btn btn-primary"&gt;1&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;2&lt;/button&gt;
&lt;div class="btn-group"&gt;
&lt;button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"&gt;Dropdown&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;
&lt;a class="dropdown-item" href="javascript:void(0);"&gt;Dropdown link&lt;/a&gt;
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
                    <div class="col-lg-12 ">
                        <div class="card dz-card" id="vertical-variation">
                            <div class="card-header d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Vertical variation</h4>
                                    <p class="mb-0 subtitle">Default button vertical variation style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-4" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-4" data-bs-toggle="tab" data-bs-target="#VerticalVariation" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#VerticalVariation-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-4">
                                <div class="tab-pane fade show active" id="VerticalVariation" role="tabpanel" aria-labelledby="home-tab-4">
                                    <div class="card-body pt-0">
                                        <div class="btn-group-vertical">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="VerticalVariation-html" role="tabpanel" aria-labelledby="home-tab-4">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div class="btn-group-vertical"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Column  -->
                    <!-- Column  -->
                    <div class="col-lg-12 ">
                        <div class="card dz-card" id="vertical-dropdown">
                            <div class="card-header d-flex justify-content-between border-0 ">
                                <div>
                                    <h4 class="card-title">Vertical dropdown variation</h4>
                                    <p class="mb-0 subtitle">Default button vertical variation style</p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-5" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active " id="home-tab-5" data-bs-toggle="tab" data-bs-target="#VerticalDropdown" type="button" role="tab"  aria-selected="true">Preview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="profile-tab-5" data-bs-toggle="tab" data-bs-target="#VerticalDropdown-html" type="button" role="tab"  aria-selected="false">HTML</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent-5">
                                <div class="tab-pane fade show active" id="VerticalDropdown" role="tabpanel" aria-labelledby="home-tab-5">
                                    <div class="card-body pt-0">
                                        <div aria-label="Vertical button group" role="group" class="btn-group-vertical">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <div role="group" class="btn-group">
                                                <button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                                <div class="dropdown-menu"><a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <div role="group" class="btn-group">
                                                <button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                                <div class="dropdown-menu"><a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div role="group" class="btn-group">
                                                <button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                                <div class="dropdown-menu"><a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div role="group" class="btn-group">
                                                <button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Dropdown</button>
                                                <div class="dropdown-menu"><a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="VerticalDropdown-html" role="tabpanel" aria-labelledby="home-tab-5">
                                    <div class="card-body p-0 code-area">
<pre class="m-0"><code class="language-html">&lt;div aria-label="Vertical button group" role="group" class="btn-group-vertical"&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;div role="group" class="btn-group"&gt;
&lt;button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"&gt;Dropdown&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;button class="btn btn-primary" type="button"&gt;Button&lt;/button&gt;
&lt;div role="group" class="btn-group"&gt;
&lt;button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"&gt;Dropdown&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div role="group" class="btn-group"&gt;
&lt;button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"&gt;Dropdown&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div role="group" class="btn-group"&gt;
&lt;button data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"&gt;Dropdown&lt;/button&gt;
&lt;div class="dropdown-menu"&gt;&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
&lt;a href="javascript:void(0);" class="dropdown-item"&gt;Dropdown link&lt;/a&gt;
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
            </div>
        </div>
        <div class="demo-right ">
            <div class="demo-right-inner dz-scroll " id="right-sidebar">
                <h4 class="title">Button Group</h4>
                <div class="dz-scroll demo-right-tabs" id="rightSidebarScroll">
                    <ul class="navbar-nav" id="menu-bar">
                        <li><a href="#button-group" class="scroll">Button Group</a></li>
                        <li><a href="#button-toolbar" class="scroll">Button Toolbar</a></li>
                        <li><a href="#button-sizing" class="scroll">Button Sizing</a></li>
                        <li><a href="#button-nesting" class="scroll">Button Nesting</a></li>
                        <li><a href="#vertical-variation" class="scroll">Vertical Variation</a></li>
                        <li><a href="#vertical-dropdown" class="scroll">Vertical Dropdown Variation</a></li>
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
