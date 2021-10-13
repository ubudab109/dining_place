<html>

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <style>
    #invoice{
        padding: 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
    }

    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 20px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #ed4c78
    }

    .invoice main {
        padding-bottom: 50px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }

    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
    }

    .invoice table td,.invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
    }

    .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
    }

    .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #3989c6;
        font-size: 1.2em
    }

    .invoice table .qty,.invoice table .total,.invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }

    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
    }

    .invoice table .unit {
        background: #ddd
    }

    .invoice table .total {
        background: #3989c6;
        color: #fff
    }

    .invoice table tbody tr:last-child td {
        border: none
    }

    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    @media print {
        .invoice {
            font-size: 11px!important;
            overflow: hidden!important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice>div:last-child {
            page-break-before: always
        }

        .hidden-print {
          display: none !important;
        }

        #invoice{
        padding: 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
    }

    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 20px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
    }

    .invoice main {
        padding-bottom: 50px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }

    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
    }

    .invoice table td,.invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
    }

    .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
    }

    .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #3989c6;
        font-size: 1.2em
    }

    .invoice table .qty,.invoice table .total,.invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }

    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
    }

    .invoice table .unit {
        background: #ddd
    }

    .invoice table .total {
        background: #3989c6;
        color: #fff
    }

    .invoice table tbody tr:last-child td {
        border: none
    }

    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    .img-print {
        width: 250px;
    }
    }
  </style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

  <script>
    window.jsPDF = window.jspdf.jsPDF
    window.html2canvas = html2canvas;

  </script>
</head>
<!------ Include the above in your HEAD tag ---------->

<body>
  
  <!--Author      : @arboshiki-->
  <div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            {{-- <button class="btn btn-info" onclick="pdf()"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> --}}
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto" id="printarea">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="http://new.mydiningplace.com/">
                            <img src="{{URL::asset('assets/logo_mdp.jpg')}}" data-holder-rendered="true" class="img-print" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" style="color: #ed4c78; !important" href="http://new.mydiningplace.com/">
                            My Dining Place
                            </a>
                        </h2>
                        <div>Street Address</div>
                        <div>Company Number</div>
                        <div>company@example.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light font-sm"> INVOICE TO: </div>
                        <h2 class="to">{{$vendor->f_name.' '. $vendor->l_name}}</h2>
                        <div class="address">{{$vendor->restaurant->address}}</div>
                        <div class="email"><a href="mailto:{{$vendor->email}}">{{$vendor->email}}</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h4 class="invoice-id">INVOICE {{$resSubs->external_id}}</h4>
                        <div class="date">Date of Invoice: {{$resSubs->updated_at}}</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">STATUS</th>
                            <th class="text-right">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left"><h3>
                                Subscription Payment {{$subscription->subs_name}}
                            </td>
                            <td class="total">{{$resSubs->status == 'COMPLETED' ? 'PAID' : 'PENDING'}}</td>
                            <td class="unit">Rp. {{number_format($subscription->subs_price, 0)}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="1">GRAND TOTAL</td>
                            <td>Rp. {{number_format($subscription->subs_price, 0)}}</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="notices">
                  <div>NOTICE:</div>
                  <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
              </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
  </div>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

  <script>
     $('#printInvoice').click(function(){
            Popup($('#printarea')[0].innerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
  </script>
  {{-- <script>
    var pdfEx = new jsPDF("p", "mm", "a4");
    function pdf()
        {
          window.html2canvas = html2canvas
          const doc = document.getElementsByTagName('body')[0];

          if (doc) {
            pdfEx.html(document.getElementById('invoice'), {
                  html2canvas: {
                      // insert html2canvas options here, e.g.
                      width: 10000
                  },
                  callback: function (pdf) {
                    pdfEx.save('DOC.pdf');
                  }
              })
        }
        }
  </script> --}}
</body>
</html>