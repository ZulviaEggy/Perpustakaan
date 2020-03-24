/* ------------------------------------------------------------------------------
 *
 *  # Fixed Columns extension for Datatables
 *
 *  Demo JS code for datatable_extension_fixed_columns.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var DatatableFixedColumns = function() {


    //
    // Setup module components
    //

    // Basic Datatable examples
    var _componentDatatableFixedColumns = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            columnDefs: [{ 
                orderable: false,
                width: 100,
                targets: [ 5 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<span>Search:</span> _INPUT_',
                searchPlaceholder: 'Type to search...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });


        // Left fixed column example
        $('.datatable-fixed-left').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    targets: [11]
                },
                { 
                    width: "200px",
                    targets: [0]
                },
                { 
                    width: "300px",
                    targets: [1]
                },
                { 
                    width: "200px",
                    targets: [5, 6]
                },
                { 
                    width: "100px",
                    targets: [4]
                }
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });


        // Right fixed column example
        $('.datatable-fixed-right').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    targets: [6]
                },
                { 
                    orderable: false,
                    width: "200px",
                    targets: [5]
                },
                { 
                    width: "300px",
                    targets: [1]
                },
                { 
                    width: "200px",
                    targets: [5, 6]
                },
                { 
                    width: "100px",
                    targets: [4]
                }
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });

        // Right fixed column example
        $('.datatable-fixed-right2').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    targets: [7]
                },
                { 
                    width: "200px",
                    targets: [5]
                },
                { 
                    width: "300px",
                    targets: [1]
                },
                { 
                    width: "200px",
                    targets: [5, 6]
                },
                { 
                    width: "100px",
                    targets: [4]
                }
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });

         // Right fixed column example
         $('.datatable-fixed-right3').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    targets: [3]
                },
                { 
                    width: "200px",
                    targets: [2]
                },
                { 
                    width: "300px",
                    targets: [1]
                }
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });

         // Right fixed column example

        $('.datatable-fixed-left2').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    targets: [9]
                },
                { 
                    orderable: false,
                    width: "200px",
                    targets: [8]
                },
                { 
                    orderable: false,
                    width: "300px",
                    targets: [7]
                },
                { 
                    width: "200px",
                    targets: [5, 6]
                },
                { 
                    width: "100px",
                    targets: [4]
                }
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });
       
        // Right fixed column example
         $('.datatable-fixed-left3').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    width: "100px",
                    targets: [3]
                },
                { 
                    width: "600px",
                    targets: [1]
                }
                
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });

          // Right fixed column example
          $('.datatable-fixed-left4').DataTable({
            columnDefs: [
                { 
                    orderable: false,
                    width: "100px",
                    targets: [9]
                },
                { 
                    orderable: false,
                    width: "600px",
                    targets: [10]
                },
                { 
                    orderable: false,
                    width: "600px",
                    targets: [11]
                }
                
            ],
            scrollX: true,
            scrollY: '350px',
            scrollCollapse: true,
            fixedColumns: true
        });
      

        // Adjust columns on window resize
        setTimeout(function() {
            $(window).on('resize', function () {
                table.columns.adjust();
            });
        }, 100);
    };

    // Select2 for length menu styling
    var _componentSelect2 = function() {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth: true,
            width: 'auto'
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDatatableFixedColumns();
            _componentSelect2();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    DatatableFixedColumns.init();
});
