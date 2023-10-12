
<x-slot name="styles">
    <style>
        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
            border: none;
        }
        .ck p{
            padding: 7px 7px 7px 7px;
        }
        .ck-content .table table th {
            background-color: var(--color-primary);

        }
        .ck-content .table table td *{
            font-family: var(--font-secondary);

        }
        .ck ul{
            margin: 15px;
        list-style: disc;
        }
        .ck ul li{
            margin-top: 8px;

        }

        .ck ol{
            margin: 15px;
        list-style: decimal;
        }
        .ck ol li{
            margin-top: 8px;

        }
        .ck h3{
            font-size: 24pt;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>

</x-slot>




<div class="col-lg-12">


    <article class="blog-details">
      <!-- End meta top -->

      <div class="content note" id="note{{ $q->id }}">
        @php
            echo $q->an;
        @endphp
      </div><!-- End post content -->
<!-- End meta bottom -->

    </article><!-- End blog post -->

  </div>

    <script>

document.addEventListener("DOMContentLoaded", () =>{

        ClassicEditor
            .create( document.querySelector( '#note{{ $q->id }}' ), {
                language: {
                    // The UI will be English.
                    ui: 'ar',

                    // But the content will be edited in Arabic.
                    content: 'ar'
                }  ,
                 removePlugins: [],
                 ckfinder: {
                            uploadUrl: "{{route('image.upload').'?_token='.csrf_token()}}",
                }

            } )
            .then( editor => {
                window.editor = editor;
                const toolbarElement = editor.ui.view.toolbar.element;
                    toolbarElement.style.display = 'none';
                    console.log(toolbarElement);
                    editor.enableReadOnlyMode( '#note');

            } )
            .catch( err => {
                console.error( err.stack );
            } );
        });
        </script>
    <style>
        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
            border: none;
        }
        .ck p{
            padding: 7px 7px 7px 7px;
        }
        .ck-content .table table th {
            background-color: var(--color-primary);

        }
        .ck-content .table table td *{
            font-family: var(--font-secondary);

        }
        .ck ul{
            margin: 15px;
        }
        .ck ul li::before{
            content: "";
           width: 10px;
          height: 10px;
          margin-left: 4px;
         background: var(--color-primary);
            display: inline-block;
        }
        .ck ul li{
            margin-top: 8px;

        }

        .ck ol{
            margin: 15px;
        list-style: decimal;
        }
        .ck ol li{
            margin-top: 8px;

        }
        .ck h3{
            font-size: 20pt;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>


