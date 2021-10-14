<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href= {{ asset('css/styles.css')}}>
    <style>
        body{
            font-size: 12px;
        }
        .w-5 {
            height: 1.875rem;
            width: 1.875rem;
        }
        p.leading-5{
            color: white;
        }
        span.z-0{

            display: block ruby;
            position: relative;
            left: 0px;
        }
    .container nav div:first-child { display: none;}
        .container nav div:last-child { margin-top: 40px;margin-bottom: 50px; width: 100%; display: flex; justify-content: center}
        </style>
</head>

<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4">
            <h1><a href="index.html" class="logo">NFE </a></h1>
            <ul class="list-unstyled components mb-5">
                <li >
                    <a href="#"><span class="fa fa-home mr-3"></span> ADD RSS</a>
                </li>
                <li class="active">
                    <a href="#"><span class="fa fa-user mr-3"></span> Articles management</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-briefcase mr-3"></span> Portfolio</a>
                </li>

            </ul>



            <div class="footer">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </nav>
    <div class="p-4 p-md-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      {{-- @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('success' ) }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif--}}
                        <div class="card-header"> All Hesspress Articles</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Link</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article )
                                <tr>
                                    <th scope="row">{{ $articles->firstItem()+$loop->index }}</th>
                                    <td>{{ $article->title }}</td>
                                    <td>{!! Str::words($article->smalldesc ,10, ' ...') !!}</td>
                                    <td>{{ $article->date }}</td>
                                    <td>{{ $article->link }}</td>
                                    <td>{{ $article->image }}</td>


                                    {{-- [user here is the methode name ] --}}

                                    <td>
                                        action
                                    {{--     <a href="{{ url('softdelete/category/'.$article->id) }}" class="btn btn-danger">Delete</a> --}}
                                     </td>

                                 </tr>
                             @endforeach

                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>{{ $articles->links() }}</div>


    {{--    <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="card">

                      <div class="card-header"> Trash List</div>

                      <table class="table">
                          <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Categorie_Name</th>
                              <th scope="col">Created at</th>
                              <th scope="col">User</th>
                              <th scope="col">Action</th>


                          </tr>
                          </thead>
                          <tbody>
                          @foreach($trachCat as $article )
                              <tr>
                                  <th scope="row">{{ $articles->firstItem()+$loop->index }}</th>
                                  <td>{{ $article->category_name }}</td>
                                  <td>{{ $article->created_at }}</td>
                                  <td> {{ $article->user->name }}</td>


                                <td>
                                    <a href="{{ url('categories/restore/'.$article->id) }}" class="btn btn-success">Restore</a>
                                    <a href="{{ url('categories/pdelete/'.$article->id) }}" class="btn btn-danger">PDelete</a>

                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{ $trachCat ->links() }}
                </div></div>
        </div></div></div> --}}
</div></div>  <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
