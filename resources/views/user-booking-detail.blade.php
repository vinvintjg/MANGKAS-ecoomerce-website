<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href={{asset('css/invoice.css')}}>
</head>
<body>
    @foreach ($bookings as $booking)
    <div class="invoice-section">
        <div class="invoice-head">
            <div class="invoice-left">
                INVOICE ID : NO00{{ $booking->id }}
            </div>
            <div class="invoice-right">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print" onclick="window.print(); return false;">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF" onclick="downloadPDF(); return false;">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
        <hr>
        <div class="invoice-logo">
            <img src="{{asset('assets/logo_navbar.png')}}" alt="logo">
        </div>
        <hr>
        <h4>PROFIL</h4>
        <p>Booking Name&emsp;&emsp;: {{ $booking->booking_name }}</p>
        <p>Booking Phone&emsp;&emsp;: {{ $booking->booking_phone }}</p>
        <p>Booking Gender  &emsp; : {{ $booking->booking_gender }}</p>

        <hr>
        <h4>SHOP</h4>
        <p>Shop Name &emsp;&emsp;&emsp;: {{ $booking->shop->shop_name }}</p>
        <p>Shop Address &emsp;&emsp;: {{ $booking->shop->shop_address }}</p>

        <hr>
        <h4>DETAIL</h4>
        {{-- <p>booking_service : {{ $booking->booking_service }}</p> --}}
        <p>Booking Haircut &emsp;: {{ $booking->haircut->haircut_name }}</p>
        <p>Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{ $booking->agenda->date }}</p>
        <p>Hour&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{ $booking->agenda->hour }}</p>
        <p>Note&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: {{ $booking->booking_note }}</p>

        <hr>
        <h4>PAYEMNT</h4>
        <p>Payment Total &emsp;&emsp;: {{ $booking->booking_payment_total }}</p>
        <p>Payment Method&emsp;: {{ $booking->booking_payment_method }}</p>
        <img height="100px" src="{{asset('storage/image/'.$booking->booking_payment_photo)}}" alt="error">
        <p>
            <form action="{{route('deleteBooking', ['id' => $booking->id])}}" method="post">
            @csrf
            @method('delete')
            <div class="button-form">
                <button type="submit">Cancel</button>
            </div>
            </form>
        </p><br>
    </div>
    @endforeach
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>


    <script>
        function downloadPDF() {
            // Cetak seluruh konten HTML
            const element = document.documentElement;

            // Konfigurasi html2pdf
            const opt = {
                margin: 10,
                filename: 'file.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            // Konversi HTML menjadi file PDF
            html2pdf().set(opt).from(element).save();
        }
    </script>
</body>
</html>
