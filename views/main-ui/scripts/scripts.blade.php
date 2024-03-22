<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>

<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>



<script src="{{ asset('js/ImageViewer.js') }}"></script>
<script>
    $(document).ready(function() {


        $('[data-gallery]').click(function(e) {
            e.preventDefault();

            var items = [],
                options = {
                    index: $(this).index(),
                    footerToolbar: [
                        'zoomIn', 'zoomOut', 'prev', 'fullscreen', 'next', 'actualSize',
                        'rotateRight', 'myCustomButton'
                    ],
                    customButtons: {
                        myCustomButton: {
                            text: '<i class="fas fa-info-circle"></i>',
                            title: 'custom!',
                            click: function(context, e) {
                                alert('clicked the custom button!');
                            }
                        }
                    }
                };

            $('[data-gallery]').each(function() {
                items.push({
                    src: $(this).attr('href'),
                    title: $(this).data('title'),
                });
            });

            new PhotoViewer(items, options);
        });


        // Listen for the 'shown.bs.modal' event on all modals
        $('body').on('shown.bs.modal', '.modal', function() {
            var modal = $(this);

            // Destroy all select elements within the modal
            modal.find('select').each(function() {
                $(this).select2('destroy');
            });

            // Recreate select elements with the specified options
            modal.find('[data-control="select2"]').each(
                function() {
                    $(this).select2({
                        dropdownParent: modal
                    }).focus();
                });
        });
    });


    $(document).on('click', 'a[href="#dfg"]', function(event) {
        event.preventDefault();
        Swal.fire({
            icon: 'error',
            title: 'Permission Denied',
            text: 'You do not have permission to edit this function'
        });
    });
</script>


@isset($editor)
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>


    <script src="{{ asset('assets/ckeditor/adapters/jquery.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('textarea').ckeditor(function(textarea) {
                // Callback function code.
            });
        });
    </script>
@endisset


@isset($chart)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}



    @isset($charts)
        {!! $charts->script() !!}
    @endisset
@endisset


@isset($FinancialQuarterChart)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $FinancialQuarterChart->script() !!}
@endisset


@isset($ModuleChart)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $ModuleChart->script() !!}
@endisset

@include('main-ui.not.not')
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.6/viewer.min.js"></script>


@if (isset($rem))
    <script>
        $(function() {
            setInterval(function() {
                @foreach ($rem as $val)

                    $(".x_{{ $val }}").remove();
                @endforeach
            }, 1000);



        });
    </script>
@endif

<script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.PreTestAdded').addEventListener('click', function() {
            Swal.fire({
                icon: 'info',
                title: 'Attention!',
                text: 'Each course can only have one pre and post test.'
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function() {

        const viewerConfig = {
            embedMode: "LIGHT_BOX"
        };
        // Enable the View PDF button when Adobe DC View SDK is ready
        document.addEventListener("adobe_dc_view_sdk.ready", function() {
            document.querySelectorAll(".pdfviewerme").forEach(function(button) {
                button.disabled = false;
            });
        });

        // Function to render the file using PDF Embed API
        function previewFile(url, fileName) {
            // Initialize the AdobeDC View object
            var adobeDCView = new AdobeDC.View({
                // Pass your registered client id
                clientId: "c633c57096c14e3591f957373276cdc9"
            });

            // Invoke the file preview API on Adobe DC View object
            adobeDCView.previewFile({
                // Pass information on how to access the file
                content: {
                    // Location of file where it is hosted
                    location: {
                        url: url
                    },
                },
                // Pass meta data of file
                metaData: {
                    // File name obtained from data-docname attribute
                    fileName: fileName
                }
            }, viewerConfig);
        };

        // Add click event listener to buttons with class pdfviewerme
        document.querySelectorAll('.pdfviewerme').forEach(function(button) {
            button.addEventListener('click', function() {
                var documentUrl = this.getAttribute('data-documenturl');
                var documentName = this.getAttribute('data-docname');
                previewFile(documentUrl, documentName);
            });
        });
    });
</script>
<script src="https://cdn.tiny.cloud/1/1nr3t3t5xeyg86kk7vb6p7u0d9eo1w4zd7dy14p1volsp9ed/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.querySelectorAll('textarea').length > 0) {
            tinymce.init({
                selector: 'textarea', // Targets all <textarea> elements
                readonly: false // Ensures the editors are not read-only
            });
        } else {
            console.error('No textarea elements found.');
        }
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('.pagination a.page-link').forEach(el => {
            el.addEventListener('click', function(e) {
                window.location.href = this.getAttribute('href');
            });
        });
    });
</script>
</body>


</html>
