@extends('layouts.app')

@section('pageTitle', 'Accordion')

@section('head')
    <!-- Prism -->
    <link rel="stylesheet" href="{{ url('vendors/prism/prism.css') }}" type="text/css">
@endsection

@section('content')

    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Components</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Accordion</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Basic Accordion</h6>

                    <div class="accordion" id="accordionExample">
                        <div class="card shadow-none">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-label="CODE EXAMPLE" class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="accordion" id="accordionExample"&gt;
  &lt;div class="card"&gt;
    &lt;div class="card-header" id="headingOne"&gt;
      &lt;button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne"&gt;
        Collapsible Group Item #1
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
         data-parent="#accordionExample"&gt;
      &lt;div class="card-body"&gt;...&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;div class="card-header" id="headingTwo"&gt;
      &lt;button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
        Collapsible Group Item #2
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
         data-parent="#accordionExample"&gt;
      &lt;div class="card-body"&gt;...&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;div class="card-header" id="headingThree"&gt;
      &lt;button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;
        Collapsible Group Item #3
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div id="collapseThree" class="collapse" aria-labelledby="headingThree"
         data-parent="#accordionExample"&gt;
      &lt;div class="card-body"&gt;...&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Custom Accordion Default</h6>
                            <div class="accordion custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem
                                            cumque distinctio dolor dolore dolorem dolores error fugit hic ipsam magnam
                                            magni maxime minima nobis officia omnis perspiciatis, quasi quis ratione
                                            sunt? Deserunt distinctio eligendi et ipsum obcaecati repudiandae. Aperiam
                                            at consequuntur dignissimos, dolorem eaque earum exercitationem fugit
                                            perspiciatis ratione veritatis? Ad culpa facere numquam? A architecto, aut
                                            cum deleniti dignissimos distinctio dolor dolores ducimus ea, error esse ex
                                            illum impedit ipsum maiores minima mollitia nihil odit officiis omnis
                                            repudiandae rerum saepe sapiente sed sint ullam vel velit veritatis vitae
                                            voluptatibus. Blanditiis harum laborum, magni nisi nulla provident quae
                                            rem!</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem
                                            cumque distinctio dolor dolore dolorem dolores error fugit hic ipsam magnam
                                            magni maxime minima nobis officia omnis perspiciatis, quasi quis ratione
                                            sunt? Deserunt distinctio eligendi et ipsum obcaecati repudiandae. Aperiam
                                            at consequuntur dignissimos, dolorem eaque earum exercitationem fugit
                                            perspiciatis ratione veritatis? Ad culpa facere numquam? A architecto, aut
                                            cum deleniti dignissimos distinctio dolor dolores ducimus ea, error esse ex
                                            illum impedit ipsum maiores minima mollitia nihil odit officiis omnis
                                            repudiandae rerum saepe sapiente sed sint ullam vel velit veritatis vitae
                                            voluptatibus. Blanditiis harum laborum, magni nisi nulla provident quae
                                            rem!</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem
                                            cumque distinctio dolor dolore dolorem dolores error fugit hic ipsam magnam
                                            magni maxime minima nobis officia omnis perspiciatis, quasi quis ratione
                                            sunt? Deserunt distinctio eligendi et ipsum obcaecati repudiandae. Aperiam
                                            at consequuntur dignissimos, dolorem eaque earum exercitationem fugit
                                            perspiciatis ratione veritatis? Ad culpa facere numquam? A architecto, aut
                                            cum deleniti dignissimos distinctio dolor dolores ducimus ea, error esse ex
                                            illum impedit ipsum maiores minima mollitia nihil odit officiis omnis
                                            repudiandae rerum saepe sapiente sed sint ullam vel velit veritatis vitae
                                            voluptatibus. Blanditiis harum laborum, magni nisi nulla provident quae
                                            rem!</p>
                                    </div>
                                </div>
                            </div>

                            <div data-label="CODE EXAMPLE" class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="accordion custom-accordion"&gt;
  &lt;div class="accordion-row open"&gt;
    &lt;a href="#" class="accordion-header"&gt;
      &lt;span&gt;Accordion 1&lt;/span&gt;
      &lt;i class="accordion-status-icon close fa fa-chevron-up"&gt;&lt;/i&gt;
      &lt;i class="accordion-status-icon open fa fa-chevron-down"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;div class="accordion-body"&gt;...&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="accordion-row"&gt;
    &lt;a href="#" class="accordion-header"&gt;
      &lt;span&gt;Accordion 2&lt;/span&gt;
      &lt;i class="accordion-status-icon close fa fa-chevron-up"&gt;&lt;/i&gt;
      &lt;i class="accordion-status-icon open fa fa-chevron-down"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;div class="accordion-body"&gt;...&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="accordion-row"&gt;
    &lt;a href="#" class="accordion-header"&gt;
      &lt;span&gt;Accordion 3&lt;/span&gt;
      &lt;i class="accordion-status-icon close fa fa-chevron-up"&gt;&lt;/i&gt;
      &lt;i class="accordion-status-icon open fa fa-chevron-down"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;div class="accordion-body"&gt;...&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Accordion Primary</h6>
                            <p>Add the <code>.accordion-primary</code> class to use.</p>
                            <div class="accordion accordion-primary custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>

                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>

                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Accordion Secondary</h6>
                            <p>Add the <code>.accordion-secondary</code> class to use.</p>
                            <div class="accordion accordion-secondary custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Accordion Success</h6>
                            <p>Add the <code>.accordion-succcess</code> class to use.</p>
                            <div class="accordion accordion-success custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Accordion Warning</h6>
                            <p>Add the <code>.accordion-warning</code> class to use.</p>
                            <div class="accordion accordion-warning custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem
                                            cumque distinctio dolor dolore dolorem dolores error fugit hic ipsam magnam
                                            magni maxime minima nobis officia omnis perspiciatis, quasi quis ratione
                                            sunt? Deserunt distinctio eligendi et ipsum obcaecati repudiandae. Aperiam
                                            at consequuntur dignissimos, dolorem eaque earum exercitationem fugit
                                            perspiciatis ratione veritatis? Ad culpa facere numquam? A architecto, aut
                                            cum deleniti dignissimos distinctio dolor dolores ducimus ea, error esse ex
                                            illum impedit ipsum maiores minima mollitia nihil odit officiis omnis
                                            repudiandae rerum saepe sapiente sed sint ullam vel velit veritatis vitae
                                            voluptatibus. Blanditiis harum laborum, magni nisi nulla provident quae
                                            rem!</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Accordion Danger</h6>
                            <p>Add the <code>.accordion-danger</code> class to use.</p>
                            <div class="accordion accordion-danger custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Accordion Info</h6>
                            <p>Add the <code>.accordion-info</code> class to use.</p>
                            <div class="accordion accordion-info custom-accordion">
                                <div class="accordion-row open">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 1</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 2</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                                <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>Accordion 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, deleniti dolore
                                            dolorem eos hic inventore iure natus nesciunt odio placeat repudiandae sunt
                                            unde vero voluptate voluptatem! Animi commodi cumque deleniti earum enim
                                            esse est exercitationem fuga, in itaque libero mollitia nam nostrum optio
                                            praesentium quis quisquam quo repudiandae velit voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection


@section('script')
    <!-- Prism -->
    <script src="{{ url('vendors/prism/prism.js') }}"></script>
@endsection
