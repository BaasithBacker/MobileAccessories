@extends('theme2')


@section('content')
<body>
    <header>
        
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Add Item</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Add New Item</h2>
                                <p>Add new Item of the mobile's and mention the category and brand under which the brand it should be</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                
                                <h3>Welcome Back Admin! <br>
                                    Add Item,  </h3>
                                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                               

                                <div class="col-md-12 form-group p_star">
                                <!-- <td>Category</td>
                                <div class="box-select">
                                <select name="select" id="select">
                                 <option value="Mobilecases">Mobile Cases</option>
                                <option value="Glass">ScreenProtectors</option>  
                                 </div>
                                </div> -->

                                
                    
                                                                
                                        <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Item-Name">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="size" name="size" value=""
                                            placeholder="Item-Size">
                                    </div>

                                      <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="color" name="color" value=""
                                            placeholder="Item-Color">
                                    </div>

                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="desc" name="desc" value=""
                                            placeholder="Item-Desc">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="stock" name="stock" value=""
                                            placeholder="Item-Stock">
                                    </div>

                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="sprice" name="sprice" value=""
                                            placeholder="Item-SellingPrice">
                                    </div>

                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="cprice" name="cprice" value=""
                                            placeholder="Item-CostPrice">
                                    </div>

                                    </div>
                                    <div class="col-md-12 form-group">
                                      
                                        <button type="submit" value="submit" class="btn_3">
                                            Add
                                        </button>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        <!--================login_part end =================-->
     
    </main>

    @endsection