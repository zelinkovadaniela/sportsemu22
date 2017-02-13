@extends ('layouts.app')

@section('content')



<br/>
<br/>
<h1 id="booking_h1">Create a booking</h1>
<p id="booking_p">Select the day and an hour by clicking on the field</p>
{{Form::open()}}
<button type="submit" class="prev_week" ></span>Previous Week</button>
<button type="submit" class="this_week" ></span>This Week</button>
<button type="submit" class="next_week" ></span>Next Week</button>
<table class="reservation_table h-s-bg md-whiteframe-3dp">
    <thead>
    <tr >
        <th></th>
        <th>
           <p class="this-week">Monday <br/>12.12.2016</p><p class="previous-week">Monday <br/>5.12.2016</p><p class="next-week">Monday <br/>19.12.2016</p>
        </th>
        <th>
            <p class="this-week">Tuesday <br/>13.12.2016</p><p class="previous-week">Tuesday <br/>6.12.2016</p><p class="next-week">Tuesday <br/>20.12.2016</p>
        </th>
        <th>
           <p class="this-week"> Wednesday <br/>14.12.2016</p><p class="previous-week">Wednesday <br/>7.12.2016</p><p class="next-week">Wednesday <br/>21.12.2016</p>
        </th>
        <th>
            <p class="this-week">Thursday <br/>15.12.2016</p><p class="previous-week">Thursday <br/>8.12.2016</p><p class="next-week">Thursday <br/>22.12.2016</p>
        </th>
        <th>
            <p class="this-week">Friday <br/>16.12.2016</p><p class="previous-week">Friday <br/>9.12.2016</p><p class="next-week">Friday <br/>23.12.2016</p>
        </th>
        <th>
            <p class="this-week">Saturday <br/>17.12.2016</p><p class="previous-week">Saturday <br/>10.12.2016</p><p class="next-week">Saturday <br/>24.12.2016</p>
        </th>
        <th>
            <p class="this-week">Sunday <br/>18.12.2016</p><p class="previous-week">Sunday <br/>11.12.2016</p><p class="next-week">Sunday <br/>25.12.2016</p>
        </th>
    </tr>
    <tr>
        <th>
            8:00-9:00
        </th>
        <td><button type="button" class="select_date" value="monday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 8:00-9:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            9:00-10:00
        </th>
        <td><button type="button" class="select_date" value="monday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 9:00-10:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            10:00-11:00
        </th>
        <td><button type="button" class="select_date" value="monday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 10:00-11:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            11:00-12:00
        </th>
        <td><button type="button" class="select_date" value="monday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 11:00-12:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            12:00-13:00
        </th>
        <td><button type="button" class="select_date" value="monday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 12:00-13:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            13:00-14:00
        </th>
        <td><button type="button" class="select_date" value="monday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 13:00-14:00" data-toggle="modal" data-target="#myModal"></button></td>
    <tr>
        <th>
            14:00-15:00
        </th>
        <td><button type="button" class="select_date" value="monday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 14:00-15:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            15:00-16:00
        </th>
        <td><button type="button" class="select_date" value="monday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 15:00-16:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            16:00-17:00
        </th>
        <td><button type="button" class="select_date" value="monday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 16:00-17:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            17:00-18:00
        </th>
        <td><button type="button" class="select_date" value="monday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 17:00-18:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            18:00-19:00
        </th>
        <td><button type="button" class="select_date" value="monday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 18:00-19:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            19:00-20:00
        </th>
        <td><button type="button" class="select_date" value="monday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 19:00-20:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
    <tr>
        <th>
            20:00-21:00
        </th>
        <td><button type="button" class="select_date" value="monday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="tuesday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="wednesday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="thursday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="friday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="saturday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
        <td><button type="button" class="select_date" value="sunday 20:00-21:00" data-toggle="modal" data-target="#myModal"></button></td>
    </tr>
</table>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Your Selection</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

                    <div class="form-group">
                    </div>


            </div>

            <div class="modal-footer">
                <form role="form" method="post" action="/booking/store">
                    <button type="submit" class="book">BOOK</button>
                </form>
                <button type="submit" class="cancel" data-dismiss="modal"></span>Cancel</button>
            </div>
        </div>

    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>


{{Form::close()}}

    @stop
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script type="text/javascript">
    var reservation_uid = 0;
    var remove_btn = $('<div class="remove-button">X</div>');

    $(document).ready(function() {
        $( ".select_date" ).click(function( event ) {
            event.preventDefault();
            reservation_uid++;
            $(this).css('background-color', '#ff5c39').css('color', '#fff').addClass('booked');

            $("<p id='reservation_p_"+reservation_uid+"'>").append(remove_btn).append('Pending reservation').appendTo($(this));
            $( "<div id='reservation_"+reservation_uid+"'>" )
                    .append( $(this).attr("value") )
                    .appendTo( ".form-group" );



            remove_btn.click(function(event) {
                event.stopPropagation();
                $(this).closest('.select_date').css('background-color', '#7BC6FC').removeClass('booked');
                $('#reservation_'+reservation_uid).remove();
                $(this).closest('p').remove();

            });
        });

        $( ".prev_week" ).click(function( event ) {
            event.preventDefault();
            $('.this-week').css('display', 'none');
            $('.next-week').css('display', 'none');
            $('.previous-week').css('display', 'initial');

        });
        $( ".next_week" ).click(function( event ) {
            event.preventDefault();
            $('.this-week').css('display', 'none');
            $('.previous-week').css('display', 'none');
            $('.next-week').css('display', 'initial');
        });
        $( ".this_week" ).click(function( event ) {
            event.preventDefault();
            $('.next-week').css('display', 'none');
            $('.previous-week').css('display', 'none');
            $('.this-week').css('display', 'initial');
        });


    });
</script>