<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PersonalView-My Drafts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1" />
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="MyDrafts.css">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <!--Top Navgiation-->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">  
                <!--Logo & Button section -->  
                <div class="navbar-header">  
                    <div class="collapse-button">
                        <button type="button" class="navbar-toggle"
                        data-toggle="collapse"   
                        data-target=".navbar-ex1-collapse">  
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>  
                            <span class="icon-bar"></span>  
                            <span class="icon-bar"></span>  
                        </button>  
                    </div>
                    <img src="LOGO.png" alt="logo">    
                </div> 
                <!-- Menu section -->  
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-left">  
                        <li><a href="# ">Hello User</a></li>  
                        <li><a href="# ">Home</a></li>  
                        <li><a href="#">Log out</a></li>
                    </ul> 
                    <button type="submit" class="btn btn-default btn-sm avtive" id="new-note-button">
                        <span class="glyphicon glyphicon-plus"></span>&nbspCreate new note
                    </button>                
                    <!--Form-->
                    <form action="##" class="navbar-form navbar-right" id="header-form" rol="search">
                        <div class="form-group">
                            <select class="form-control col-lg-5">
                                <option>Topics</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Keywords" />
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>  
            </div>  
        </nav>
        <!--Main Content-->
        <div class="center-block">
            <div class="Left-nav">
                <p class="Left-nav-Title">Lists</p>
                <a href="">
                    <div class="lsit1">
                        <div class="list-pic">
                            <img src="my note.png" alt="my notes">
                        </div>
                        <div class="list-words">
                            <p class="list-sub-title">My Notes</p>
                            <p class="list-description">Here you can see the literature notes you created.</p>
                            <p class="list-info"><span class="glyphicon glyphicon-eye-open"></span>&nbspI have 0 notes.</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="list2">
                        <div class="list-pic">
                            <img src="my drafts.png" alt="my drafts">
                        </div>
                        <div class="list-words">
                            <p class="list-sub-title">My Drafts</p>
                            <p class="list-description">Here you can see the literature notes you haven't submited.</p>
                            <p class="list-info"><span class="glyphicon glyphicon-eye-open"></span>&nbspI have 0 note drafts</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="list3">
                        <div class="list-pic">
                            <img src="my follow.png" alt="my follow">
                        </div>
                        <div class="list-words">
                            <p class="list-sub-title">Users I Followed</p>
                            <p class="list-description">Here's where you can see a list of all the users you're following.</p>
                            <p class="list-info"><span class="glyphicon glyphicon-eye-open"></span>&nbspI follow 0 users.</p>
                        </div>  
                    </div>
                </a>
                <div class="left-nav-footer">
                    <span>© 2017 Co-Papers.net. All rights reserved</span>
                    <br>
                    <span><a href="">About us</a></span>
                </div>
            </div>
            <!--Main container-->
            <div class="main-container">
                <div class="main-title">
                    <p>Notes</p>
                </div>
                <div class="title-slogan">
                    <p>Drafts you have saved</p>
                </div>

                <ul class="created-notes-list">
                    <li class="note">         
                        <h4><a href="">Software Engineering group project</a>
                        </h4>
                        <h5>
                            <span class="glyphicon glyphicon-tags"></span>&nbsp
                            <span>computer;</span>
                            <span>software;</span>
                        </h5>
                        <div class="list-inter-span">
                            <ul>
                                <li>
                                    <span><a href="">View source</a></span>
                                </li>
                                <li>
                                    <span><a href="">Edit</a></span>
                                </li>
                                <li>
                                    <span><a href="">Delete</a></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="cut-off-line"></div>

                <ul class="created-notes-list">
                    <li class="note">         
                        <h4><a href="">Software Engineering group project</a>
                        </h4>
                        <h5>
                            <span class="glyphicon glyphicon-tags"></span>&nbsp
                            <span>computer;</span>
                            <span>software;</span>
                        </h5>
                        <div class="list-inter-span">
                            <ul>
                                <li>
                                    <span><a href="">View source</a></span>
                                </li>
                                <li>
                                    <span><a href="">Edit</a></span>
                                </li>
                                <li>
                                    <span><a href="">Delete</a></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="cut-off-line"></div>

                <ul class="created-notes-list">
                    <li class="note">         
                        <h4><a href="">Software Engineering group project</a>
                        </h4>
                        <h5>
                            <span class="glyphicon glyphicon-tags"></span>&nbsp
                            <span>computer;</span>
                            <span>software;</span>
                        </h5>
                        <div class="list-inter-span">
                            <ul>
                                <li>
                                    <span><a href="">View source</a></span>
                                </li>
                                <li>
                                    <span><a href="">Edit</a></span>
                                </li>
                                <li>
                                    <span><a href="">Delete</a></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="cut-off-line"></div>

                <ul class="created-notes-list">
                    <li class="note">         
                        <h4><a href="">Software Engineering group project</a>
                        </h4>
                        <h5>
                            <span class="glyphicon glyphicon-tags"></span>&nbsp
                            <span>computer;</span>
                            <span>software;</span>
                        </h5>
                        <div class="list-inter-span">
                            <ul>
                                <li>
                                    <span><a href="">View source</a></span>
                                </li>
                                <li>
                                    <span><a href="">Edit</a></span>
                                </li>
                                <li>
                                    <span><a href="">Delete</a></span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="cut-off-line"></div>
            </div>
        </div> 
    </div>  
</body>
</html>
