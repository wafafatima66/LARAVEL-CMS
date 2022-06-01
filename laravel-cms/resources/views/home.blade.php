@extends('layouts.app')

@section('css')
    <!-- Data Table CSS -->
    <link href="{{ URL::asset('plugins/awselect/awselect.min.css') }}" rel="stylesheet" />
    <!-- RichText CSS -->
    <link href="{{ URL::asset('plugins/richtext/richtext.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="container-fluid mt-5-7">
        <div class="row">
            <div class="col-md-4 p-1">
                <div class="notes-sidebar">
                    <div class="card">
                        <div class="card-header">App future,INC</div>
                        <div class="card-body">
                            Store the minutes of general meetings . <span><i class="fas fa-edit"></i></span>
                            <div class="card-sub-body d-flex justify-content-between align-items-baseline mt-2">
                                <span><i class="fa fa-user" aria-hidden="true"></i> 1 mem</span>
                                <p>Updated Date</p>
                                <button class="btn btn-primary"><i class="fa fa-plus"></i> Create a note</button>
                            </div>
                        </div>
                    </div>

                    <?php
                    for($i=0 ; $i<20 ; $i++){ ?>

                    <div class="card">
                        <div class="card-h6">Sep 12 2018</div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias molestiae sunt nam, velit quod
                            earum maiores dicta corrupti eum deserunt.
                            <div class="card-sub-body d-flex justify-content-between align-items-baseline mt-2">
                                <p>Tomito keyo</p>
                                <p>Today 9:59</p>

                            </div>
                        </div>
                    </div>

                    <?php }
                ?>


                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background: #E7E7E7">App Future , Inc</div>
                    <div class="card-h6" style="border-bottom: solid 1px #f2f2f2;">Sep 12 2018</div>
                    {{-- <div class="card-body p-5" style="height: calc(100vh - (400px));">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quo nostrum neque molestiae, accusantium culpa commodi dolorem veniam quam laboriosam.</div> --}}
                    <div class="">
                        <div class="input-box" style="height: 100px">
                            <textarea class="form-control" name="content" rows="12" id="richtext" required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-danger">{{ $errors->first('content') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="bottom-toolbar">
                        {{-- <ul>
                            <li class="bottom-toolbar-icon"><i class="fa fa-bold"></i></li>
                        </ul> --}}
                        <div class="text-right">
                            <button class="btn btn-primary"><i class="fa-solid fa-comment"></i> Messaging</button>
                        </div>
                        
                    </div>

                </div>
               
            </div>
        </div>
    </div>
@endsection


@section('js')
    <!-- Awselect JS -->
    <script src="{{ URL::asset('plugins/awselect/awselect.min.js') }}"></script>
    <script src="{{ URL::asset('js/awselect.js') }}"></script>
    <!-- File Uploader -->
    <script src="{{ URL::asset('js/file-upload.js') }}"></script>
    <!-- RichText JS -->
    <script src="{{ URL::asset('plugins/richtext/jquery.richtext.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {

            "use strict";

            $('#richtext').richText({

                // text formatting
                bold: true,
                italic: true,
                underline: true,

                // text alignment
                leftAlign: true,
                centerAlign: true,
                rightAlign: true,
                justify: true,

                // lists
                ol: true,
                ul: true,

                // title
                heading: true,

                // fonts
                fonts: true,
                fontList: [
                    "Arial",
                    "Arial Black",
                    "Comic Sans MS",
                    "Courier New",
                    "Geneva",
                    "Georgia",
                    "Helvetica",
                    "Impact",
                    "Lucida Console",
                    "Tahoma",
                    "Times New Roman",
                    "Verdana"
                ],
                fontColor: true,
                fontSize: true,

                // uploads
                imageUpload: true,
                fileUpload: true,

                // media
                videoEmbed: true,

                // link
                urls: true,

                // tables
                table: true,

                // code
                removeStyles: true,
                code: true,

                // colors
                colors: [],

                // dropdowns
                fileHTML: '',
                imageHTML: '',

                // translations
                translations: {
                    'title': 'Title',
                    'white': 'White',
                    'black': 'Black',
                    'brown': 'Brown',
                    'beige': 'Beige',
                    'darkBlue': 'Dark Blue',
                    'blue': 'Blue',
                    'lightBlue': 'Light Blue',
                    'darkRed': 'Dark Red',
                    'red': 'Red',
                    'darkGreen': 'Dark Green',
                    'green': 'Green',
                    'purple': 'Purple',
                    'darkTurquois': 'Dark Turquois',
                    'turquois': 'Turquois',
                    'darkOrange': 'Dark Orange',
                    'orange': 'Orange',
                    'yellow': 'Yellow',
                    'imageURL': 'Image URL',
                    'fileURL': 'File URL',
                    'linkText': 'Link text',
                    'url': 'URL',
                    'size': 'Size',
                    'responsive': 'Responsive',
                    'text': 'Text',
                    'openIn': 'Open in',
                    'sameTab': 'Same tab',
                    'newTab': 'New tab',
                    'align': 'Align',
                    'left': 'Left',
                    'center': 'Center',
                    'right': 'Right',
                    'rows': 'Rows',
                    'columns': 'Columns',
                    'add': 'Add',
                    'pleaseEnterURL': 'Please enter an URL',
                    'videoURLnotSupported': 'Video URL not supported',
                    'pleaseSelectImage': 'Please select an image',
                    'pleaseSelectFile': 'Please select a file',
                    'bold': 'Bold',
                    'italic': 'Italic',
                    'underline': 'Underline',
                    'alignLeft': 'Align left',
                    'alignCenter': 'Align centered',
                    'alignRight': 'Align right',
                    'addOrderedList': 'Add ordered list',
                    'addUnorderedList': 'Add unordered list',
                    'addHeading': 'Add Heading/title',
                    'addFont': 'Add font',
                    'addFontColor': 'Add font color',
                    'addFontSize': 'Add font size',
                    'addImage': 'Add image',
                    'addVideo': 'Add video',
                    'addFile': 'Add file',
                    'addURL': 'Add URL',
                    'addTable': 'Add table',
                    'removeStyles': 'Remove styles',
                    'code': 'Show HTML code',
                    'undo': 'Undo',
                    'redo': 'Redo',
                    'close': 'Close'
                },

                // privacy
                youtubeCookies: false,

                // developer settings
                useSingleQuotes: false,
                height: 0,
                heightPercentage: 0,
                id: "",
                class: "",
                useParagraph: false,
                maxlength: 0,
                callback: undefined,
                useTabForNext: false
            });

        });
    </script>
@endsection
