<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <!-- --------google translater----- -->
    <div class="main-p-translate">
        <div id="google_element"></div>
        <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">
        </script>
        <script>
            function loadGoogleTranslate() {
                new google.translate.TranslateElement (
                    "google_element");
            }
        </script>
    </div>
    <!-- -------------------------- -->
<aside class="w-64 desk-aside" aria-label="Sidebar">
      <div class="px-3 py-4 overflow-y-auto rounded bg-gray-50 dark:bg-gray-800">
    <div class="cross">
      <img src="f/cross.png" alt="">
    </div>
      <ul class="space-y-2">
              <img class="img"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAACCCAMAAACXSEZJAAAAA1BMVEUAAACnej3aAAAAOElEQVR4nO3BMQEAAADCoPVPbQwfoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgL8BhIoAAYkXYskAAAAASUVORK5CYII="
                  alt="">
              <li>
                  <a href="admin-home.php"
                      class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                      <svg aria-hidden="true"
                          class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                          fill="currentColor" viewBox="0 0
                  1024 1024" xmlns="http://www.w3.org/2000/svg">
                          <path fill="currentColor" d="M512 128 128
                    447.936V896h255.936V640H640v256h255.936V447.936z" /"></path>
                      </svg>
                      <span class="ml-3"> Home</span>
                  </a>
              </li>
              <li>
                  <a href="admin-partner.php"
                      class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                      <svg aria-hidden="true"
                          class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                          fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5 3a2 2 0 00-2
                    2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0
                    00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2
                    2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11
                    13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0
                    01-2-2v-2z"></path>
                      </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Partner</span>

                  </a>
              </li>
              <li>
                  <a href="blog-admin.php"
                      class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                      <svg aria-hidden="true"
                          class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                          fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <title>Micro.blog</title>
                          <path d="M12 0C5.4 0 0 4.9 0 10.95 0 17 5.4 21.9 12 21.9c1.4 0
                    2.85-.25 4.2-.7.15-.05.35 0 .45.1 1 1.35 2.55 2.3 4.25
                    2.7l.25-.1v-.3a4.65 4.65 0 01.2-5.9C22.9 15.85 24 13.5 24
                    10.95 24 4.9 18.55 0 12 0zm-.05 5.2c.15 0 .3.1.35.25L13.55
                    9l3.85.1c.15 0 .3.1.35.2.05.15 0 .3-.15.4L14.55 12l1.1
                    3.6c.05.15 0 .3-.15.4h-.4l-3.15-2.15L8.8
                    16h-.4c-.15-.1-.2-.25-.15-.4l1.1-3.6L6.3
                    9.7c-.15-.1-.2-.25-.15-.4.05-.1.2-.2.35-.2l3.85-.1
                    1.25-3.55c.05-.15.2-.25.35-.25z" />
                      </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Blog</span>

                  </a>
              </li>
              <li>
                  <a href="latest-news-admin.php"
                      class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                      <svg aria-hidden="true"
                          class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                          fill="currentColor" viewBox="0 0 16 16">
                          <path d="M0 2.5A1.5
                      1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0
                      .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1
                      0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0
                      13.5v-11zM12 14c.37 0
                      .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0
                      0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                          <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0
                        2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3
                        0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3
                        2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                      </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Latest News</span>
                  </a>
              </li>
              <li>
                  <a href="about-admin.php"
                      class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                      <svg aria-hidden="true"
                          class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                          fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000
                          6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                      </svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">About Us</span>
                  </a>
              </li>

          </ul>
      </div>
  </aside>

  <aside class="w-64 mbl-aside" aria-label="Sidebar">
        <div class="px-3 py-4 overflow-y-auto rounded bg-gray-50 dark:bg-gray-800">

            <ul class="space-y-2">
                <!-- <img class="img"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAACCCAMAAACXSEZJAAAAA1BMVEUAAACnej3aAAAAOElEQVR4nO3BMQEAAADCoPVPbQwfoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgL8BhIoAAYkXYskAAAAASUVORK5CYII="
                    alt=""> -->
                    
                <li class="toggler"><img src="f/white-ham.png" alt=""></li>
                <li>
                    <a href="admin-home.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0
              1024 1024" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M512 128 128
                447.936V896h255.936V640H640v256h255.936V447.936z" /"></path>
                        </svg>
                        
                    </a>
                </li>
                <li>
                    <a href="admin-partner.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3a2 2 0 00-2
                2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0
                00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2
                2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11
                13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0
                01-2-2v-2z"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="blog-admin.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Micro.blog</title>
                            <path d="M12 0C5.4 0 0 4.9 0 10.95 0 17 5.4 21.9 12 21.9c1.4 0
                2.85-.25 4.2-.7.15-.05.35 0 .45.1 1 1.35 2.55 2.3 4.25
                2.7l.25-.1v-.3a4.65 4.65 0 01.2-5.9C22.9 15.85 24 13.5 24
                10.95 24 4.9 18.55 0 12 0zm-.05 5.2c.15 0 .3.1.35.25L13.55
                9l3.85.1c.15 0 .3.1.35.2.05.15 0 .3-.15.4L14.55 12l1.1
                3.6c.05.15 0 .3-.15.4h-.4l-3.15-2.15L8.8
                16h-.4c-.15-.1-.2-.25-.15-.4l1.1-3.6L6.3
                9.7c-.15-.1-.2-.25-.15-.4.05-.1.2-.2.35-.2l3.85-.1
                1.25-3.55c.05-.15.2-.25.35-.25z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="latest-news-admin.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5
                  1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0
                  .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1
                  0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0
                  13.5v-11zM12 14c.37 0
                  .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0
                  0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0
                    2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3
                    0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3
                    2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="about-admin.php"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000
                      6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>

            </ul>
        </div>
    </aside>
</body>
</html>
<script>
    // ---responsive navbar----
    $(document).ready(function () {
        $(".toggler").click(function () {
            $(".mbl-aside").css("display", "none");
            $(".desk-aside").css("display", "block");
            $(".r-content-main").css("width", "calc(100% - 170px)");
            $(".r-content-main").css("left", "170px");
        });
    });

    $(document).ready(function () {
        $(".cross").click(function () {
            $(".mbl-aside").css("display", "block");
            $(".desk-aside").css("display", "none");
            $(".r-content-main").css("width", "calc(100% - 75px)");
            $(".r-content-main").css("left", "75px");
        });
    });
</script>