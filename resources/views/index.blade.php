@extends('./layouts/master')

@section('content')


<!-- 
#                       _oo0oo_
#                      o8888888o
#                      88" . "88
#                      (| -_- |)
#                      0\  =  /0
#                    ___/`---'\___
#                  .' \\|     |# '.
#                 / \\|||  :  |||# \
#                / _||||| -:- |||||- \
#               |   | \\\  -  #/ |   |
#               | \_|  ''\---/''  |_/ |
#               \  .-\__  '-'  ___/-. /
#             ___'. .'  /--.--\  `. .'___
#          ."" '<  `.___\_<|>_/___.' >' "".
#         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
#         \  \ `_.   \_ __\ /__ _/   .-` /  /
#     =====`-.____`.___ \_____/___.-`___.-'=====
#                       `=---='
#
#
#     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
#
#               佛祖保佑         永无BUG
#
#
# -->


    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <form id="searchForm" method="get" action="result">
                <div class="search">
                <input type="text" class="searchbar" name="search" placeholder="search...">  
                    <div class="searchtype">
                         <input type="radio" name="searchtype" value="author" id="a" /><label for="a">作者</label>
                        <input type="radio" name="searchtype" value="title" id="t" /><label for="t">標題</label>
                    </div>
                    <div class="searchweb">
                         <input type="checkbox" name="searchweb[]" value="rpixnet" id="p"><label for="p">Pixnet</label>
                         <input type="checkbox" name="searchweb[]" value="rxuite" id="x"><label for="x">Xuite</label>
                         <input type="checkbox" name="searchweb[]" value="rptt" id="pt"><label for="pt">Ptt</label>
                         <input type="checkbox" name="searchweb[]" value="ryoutube" id="y"><label for="y">Youtube</label>
                         <input type="checkbox" name="searchweb[]" value="rmobile01" id="m"><label for="m">Mobile01</label>
                    </div>
                    <div class="subbutton">
                         <input type="submit" value="Find Out" id="submitButton" class="btn btn-primary btn-xl"/>
                    </div>
                </div>

               
          
                </form>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">What you desire!</h2>
                    <hr class="light">
                    <h4 class="text-faded aside">不再被廣告所欺騙，不再讓網路垃圾訊息掩蓋住你所需要的商品資訊，我們透過大量的使用者體驗，找到最真實，最符合您的需求的商品</h4>
                    <br>
                    <br>
                    <a href="#classification" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="classification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section">Classification</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="classification-box">
                        <a class="btn" href='{{URL("index?show=pixnet&tag=food")}}#classification'>
                        <i class="fa fa-4x fa-cutlery text-primary sr-icons" ></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="classification-box">
                         <a class="btn" href='{{URL("index?show=pixnet&tag=dress")}}#classification'>
                        <i class="fa fa-4x fa-user text-primary sr-icons"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="classification-box">
                        <a class="btn" href='{{URL("index?show=pixnet&tag=travel")}}#classification'>
                        <i class="fa fa-4x fa-plane text-primary sr-icons"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="classification-box">
                        <a class="btn" href='{{URL("index?show=pixnet&tag=digital")}}#classification'>
                        <i class="fa fa-4x fa-laptop text-primary sr-icons"></i></a>
                    </div>
                </div>
                <div class="menu text-center">
                    <ul class="submenu">
                        <li class="col-lg-3 col-md-6 text-center">Foods
                            <ul>
                                <li class="mainlink"><a href='{{URL("index?show=pixnet&tag=food")}}#classification' class="firstMenu">Pixnet</a></li>
                                <li class="mainlink"><a href='{{URL("index?show=xuite&tag=food")}}#classification' class="firstMenu">Xuite</a></li>
                                <li class="mainlink"><a href='{{URL("index?show=ptt&tag=food")}}#classification' class="firstMenu">Ptt</a> </li>
                                <li class="mainlink"><a href='{{URL("index?show=mobile01&tag=food")}}#classification' class="firstMenu">Mobile01</a> </li>
                            </ul>
                        </li>
                        <li class="col-lg-3 col-md-6 text-center">Dresses
                            <ul>
                                <li class="mainlink"><a href='{{URL("index?show=pixnet&tag=dress")}}#classification' class="firstMenu">Pixnet</a></li>

                                <li class="mainlink"><a href='{{URL("index?show=ptt&tag=dress")}}#classification' class="firstMenu">Ptt</a> </li>
                                <li class="mainlink"><a href='{{URL("index?show=mobile01&tag=dress")}}#classification' class="firstMenu">Mobile01</a> </li>
                            </ul>
                        </li>
                        <li class="col-lg-3 col-md-6 text-center">Travel
                            <ul>
                                <li class="mainlink"><a href='{{URL("index?show=pixnet&tag=travel")}}#classification' class="firstMenu">Pixnet</a></li>
                                <li class="mainlink"><a href='{{URL("index?show=xuite&tag=travel")}}#classification' class="firstMenu">Xuite</a></li>
                                <li class="mainlink"><a href='{{URL("index?show=ptt&tag=travel")}}#classification' class="firstMenu">Ptt</a> </li>
                                <li class="mainlink"><a href='{{URL("index?show=mobile01&tag=travel")}}#classification' class="firstMenu">Mobile01</a> </li>
                            </ul>
                        </li>
                        <li class="col-lg-3 col-md-6 text-center">Digital
                            <ul>
                                <li class="mainlink"><a href='{{URL("index?show=pixnet&tag=digital")}}#classification' class="firstMenu">Pixnet</a></li>

                                <li class="mainlink"><a href='{{URL("index?show=ptt&tag=digital")}}#classification' class="firstMenu">Ptt</a> </li>
                                <li class="mainlink"><a href='{{URL("index?show=mobile01&tag=digital")}}#classification' class="firstMenu">Mobile01</a> </li>
                            </ul>
                        </li>
                     </ul>
                </div>
            </div> 
             <script type="text/javascript">                      

                    let match =window.location.search.match(/tag=[^&]+/)
                    if(match){
                        let tag=match[0].substring(4)
                        let Changecolor=document.querySelectorAll(".text-primary")
                        switch(tag){
                            case "food":{
                                Changecolor[0].style.color="#F05F40"
                                break
                            }
                            case "dress":{
                                Changecolor[1].style.color="#F05F40"
                                break
                            }
                            case "travel":{
                                Changecolor[2].style.color="#F05F40"
                                break
                            }
                            case "digital":{
                                Changecolor[3].style.color="#F05F40"
                                break
                            }
                        }
                    }
         
     
                </script> 
            <!--  row end -->
        </div>
        <!--  container end -->
       
    </section>

    <section class="no-padding" id="artical">

	

        <div class="container-fluid">
            <div class="row no-gutter ">
            @foreach($showdata as $data)
                <div class="col-lg-2 col-sm-3">
                    <a href="{{$data->search_href}}" class="artical-box" target="_blank">
                       <img class="img-responsive" src="{{$data->article_picture}}" alt="圖片未能抓取"  width="100%"  
                       onerror="this.src='./img/nodoge.jpg'">
                        <div class="artical-box-caption">
                            <div class="artical-box-caption-content">
                                <div class="project-category text-faded">
                                    {{$data->search_title}}
                                </div>
                                <div class="project-name text-faded">
                                   {{$data->search_author}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



            
            @endforeach
            </div>
            <!--  Pagination -->
            <div class="paginate">
             {{$showdata->fragment('classification')->links()}} 
            </div>
        </div>
   <!--      $abc = "123";
        "$abc" => 123
        '$abc' => $abc -->
    </section>
     <script type="text/javascript">
            let show=window.location.search.match(/show=[^&]+/)
            let tag=window.location.search.match(/tag=[^&]+/)

            console.log(tag)
         
            // if(show){
                // show=show[0]
                Array.from(document.querySelectorAll(".pagination a")).forEach(a=>{
                    let index=a.href.match(/#.+$/).index
                    // a.href=`${a.href.substring(0,index)}&${tag}&${show}${a.href.substring(index)}`
                    let sharp = a.href.substring(index);
                    a.href = a.href.substring(0, index);
                    if(show)
                        a.href += "&"+show[0];
                    if(tag)
                        a.href += "&"+tag[0];
                    a.href += sharp;
                    // a.href = a.href.substring(0,index)+"&"+show+a.href.substring(index);
                })
            // }
        </script>


@endsection
