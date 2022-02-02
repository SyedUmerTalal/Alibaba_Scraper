<html>

<head>
    <!-- Datatable CSS -->
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
                <form class="form-horizontal" id="myForm">
                    <div style="margin-top:50%;">
                        <h1 class="text-center mb-1">Alibaba Suppliers Scraper</h1>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Select Category</label>
                                <div class="col-md-9">
                                    <select id="main_cat_id" name="main_cat_id" class="form-control">
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Food&Beverage">Food & Beverage</option>
                                        <option value="Apparel">Apparel</option>
                                        <option value="Textile&LeatherProduct">Textile & Leather Product</option>
                                        <option value="FashionAccessories">Fashion Accessories</option>
                                        <option value="TimepiecesJewelryEyewear">Timepieces, Jewelry, Eyewear</option>
                                        <option value="Vehicles&Accessories">Vehicles & Accessories</option>
                                        <option value="LuggageBags&Cases">Luggage, Bags & Cases</option>
                                        <option value="Shoes&Accessories">Shoes & Accessories</option>
                                        <option value="ConsumerElectronic">Consumer Electronic</option>
                                        <option value="HomeAppliance">Home Appliance</option>
                                        <option value="Security&Protection">Security&Protection</option>
                                        <option value="ElectricalEquipment&Supplies">Electrical Equipment & Supplies</option>
                                        <option value="Sports&Entertainment">Sports & Entertainment</option>
                                        <option value="Gifts&Crafts">Gifts & Crafts</option>
                                        <option value="Toys&Hobbies">Toys & Hobbies</option>
                                        <option value="Health&Medical">Health & Medical</option>
                                        <option value="Beauty&PersonalCare">Beauty & Personal Care</option>
                                        <option value="Construction&Real Estate">Construction & Real Estate</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Select Sub Category</label>
                                <div class="col-md-9" id="textile" style="display:none;">
                                    <select id="textile" name="cat_id" class="form-control cat_id">
                                        <option value="fabric_cid423">Fabric</option>
                                        <option value="leather_cid100000941">Leather</option>
                                        <option value="leather-Product_cid100003278">Leather Products</option>
                                        <option value="down-feather_cid100000938">Down & Feather</option>
                                        <option value="fur_cid100000936">Fur</option>
                                        <option value="leather-Product_cid100003278">Grey Fabric</option>
                                        <option value="home-textile_cid405">Home Textile</option>
                                        <option value="other-textiles-leather-products_cid100000947">Other Textiles & Leather</option>
                                        <option value="textile-accessories_cid100000948">Textile Accessories</option>
                                        <option value="textile-processing_cid280504">Textile Processing</option>
                                        <option value="thread_cid427">Thread</option>
                                        <option value="yarn_cid408">Yarn</option>
                                        <option value="cotton-fabric_cid409">100% Cotton Fabric</option>
                                        <option value="polyester-fabric_cid42305">100% Polyester Fabric</option>
                                        <option value="genuine-leather_cid41506">Genuine Leather</option>
                                        <option value="bedding-set_cid40601">Bedding Set</option>
                                        <option value="towel_cid403">Towel</option>
                                        <option value="chair-cover_cid40510">Chair Cover</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-9" id="Agriculture" style="display:none;">
                                    <select id="agriculture" name="cat_id" class="form-control cat_id">
                                        <option value="agricultural-waste_cid138">Agricultural Waste</option>
                                        <option value="animal-products_cid100003006">Animal Products</option>
                                        <option value="beans_cid105">Beans</option>
                                        <option value="cocoa-beans_cid10502">Cocoa Beans</option>
                                        <option value="farm-machinery-equipment_cid100003758">Farm Machinery & Equipment</option>
                                        <option value="fresh-seafood_cid100007332">Fresh Seafood</option>
                                        <option value="feed_cid100002650">Feed</option>
                                        <option value="fruit_cid103">Fruit</option>
                                        <option value="grain_cid101">Grain</option>
                                        <option value="herbal-cigars-cigarettes_cid100008999">Herbal Cigars & Cigarettes</option>
                                        <option value="mushrooms-truffles_cid10">Mushrooms & Truffles</option>
                                        <option value="nuts-kernels_cid104">Nuts & Kernels</option>
                                        <option value="ornamental-plants_cid100002622">Ornamental Plants</option>
                                        <option value="other-agriculture-products_cid135">Other Agriculture Products</option>
                                        <option value="plant-animal-oil_cid136">Plant & Animal Oil</option>
                                        <option value="bedding-set_cid40601">Bedding</option>
                                        <option value="plant-seeds-bulbs_cid100001746">Plant Seeds & Bulbs</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group" style="display:none;">
                                <label class="col-md-3 control-label">How many pages?</label>
                                <div class="col-md-9">
                                    <select id="page_id" name="page_id" class="form-control">
                                        <!--<option value="2">2 Pages</option>-->
                                        <!--<option value="4">4 Pages</option>-->
                                        <!--<option value="4">10 Pages</option>-->
                                        <!--<option value="4">15 Pages</option>-->
                                        <option value="4">20 Pages</option>
                                        <!--<option value="32">25 Pages</option>-->
                                        <!--<option value="32">32 Pages</option>-->
                                        <!--<option value="64">64 Pages</option>-->
                                        <!--<option value="128">128 Pages</option>-->
                                        <!--<option value="256">256 Pages</option>-->
                                        <!--<option value="512">512 Pages</option>-->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="button1id"></label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- Datatable CSS -->
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatable JS -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Table -->
    <table id='empTable' class='display dataTable'>
        <thead>
            <tr>
                <th>Profile URL</th>
                <th>Contact Person</th>
                <th>Designation</th>
                <th>Tel</th>
                <th>Mobile</th>
                <th>Fax</th>
                <th>Address</th>
                <th>Country</th>
                <th>Province</th>
                <th>City</th>
                <th>Website</th>
                <th>Zip</th>
                <th>Company Name</th>
                <th>Business Type</th>
                <th>Year Established</th>
                <th>Year Joined</th>
                <th>Export</th>
                <th>Sales Volume</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <!--<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script>
        $(function() {
            $("#main_cat_id").change(function(){
                if($("#main_cat_id").val() == 'Textile&LeatherProduct') 
                {
                    $("#textile").css('display','block');
                }
                else
                {
                    $("#textile").css('display','none');
                }
                
            });
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var category = $(".cat_id").val();
                var table = $('#empTable').DataTable({
        			"bProcessing": true,
        			"bPaginate":true,
        			"sPaginationType":"full_numbers",
        			"iDisplayLength": 5,
                    ajax: {
                        url: "server.php",
                        type: "POST",
                        data: function(d){
                            d.category = category,
                            d.search = $('input[type="search"]').val()
                        }
                    },
                    columns: [
                        {data: 'profile_url', name: 'profile_url'},
                        {data: 'name', name: 'name'},
                        {data: 'contact-job', name: 'contact-job'},
                        {data: 'Telephone', name: 'Telephone'},
                        {data: 'Mobile', name: 'Mobile'},
                        {data: 'Fax', name: 'Fax'},
                        {data: 'Address', name: 'Address'},
                        {data: 'Country', name: 'Country'},
                        {data: 'Province', name: 'Province'},
                        {data: 'City', name: 'City'},    
                        {data: 'Website', name: 'Website'},
                        {data: 'Zip', name: 'Zip'},
                        {data: 'Company', name: 'Company'},
                        {data: 'BusinessType', name: 'BusinessType'},
                        {data: 'YearEstablished', name: 'YearEstablished'},
                        {data: 'YearJoined', name: 'YearJoined'},
                        {data: 'Export', name: 'Export'},
                        {data: 'SalesVolume', name: 'SalesVolume'},
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'pdf', 'print'
                    ]
                });
            });

        });
    </script>
</body>

</html>