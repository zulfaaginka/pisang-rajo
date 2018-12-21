<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$data->nopem}} INVOICE</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(3) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                {{-- <img src="https://files.fm/u/5w7qb2zh#/view/LOGO%20FINAL.png" style="width:100%; max-width:250px;"> --}}
                                <a href="https://files.fm/u/5w7qb2zh#/view/LOGO%20FINAL.png"><img src="https://files.fm/thumb_show.php?i=95bpq4n8" style="width:100%; max-width:250px;"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{$data->nama}}<br>
                                {{$data->no_telp}}<br>
                                {{$data->alamat}}<br>
                                {{$data->cara_pengambilan}} | {{$data->tempat_pengambilan}} | {{$data->tanggal_pengambilan}}
                            </td>
                            <td></td>          
                            {{-- <td>
                                Acme Corp.<br>
                                John Doe<br>
                                john@example.com
                            </td> --}}
                        </tr>
                    </table>
                </td>
            </tr>
            
            {{-- <tr class="heading">
                <td>
                    Pembayaran
                </td>
                <td>

                </td>
                <td align="right">
                    Jumlah
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Transfer
                </td>
                <td>

                </td>
                
                <td align="right">
                    1000
                </td>
            </tr>
             --}}
            <tr class="heading">
                <td>
                    Barang
                </td>

                <td>
                    Quantity
                </td>
                
                <td align="right">
                    Price
                </td>
            </tr>
            @foreach ($detail as $item)
              @foreach ($menus as $menu)
                @if ($item->id_menu == $menu->id_menu)
                <tr class="item">
                  <td width="250px">
                      {{$menu->nama_menu}}
                  </td>
                  
                  <td width="250px">
                      {{$item->qty}}
                  </td>
                  <td width="250px" align="right">
                      {{$item->harga()}}
                  </td>
                </tr>
                @endif
              @endforeach    
            @endforeach
   
            <tr class="total">
                <td></td>
                <td></td>
                <td align="right">
                   Total: Rp. {{$data->jumlah_pembayaran}}
                </td>
            </tr>
        </table>
    </div>
</body>
</html>