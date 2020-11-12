<div class="col-sm-6">
    <div class="page-title-box">
        <h4>{{isset($title) ? $title : null}}</h4>
        <ol class="breadcrumb m-0">
            @if (isset($li1))
            <li class="breadcrumb-item"><a href="javascript: void(0);">{{isset($li1) ? $li1 : null}}</a></li>
            @endif
            @if (isset($li2))
            <li class="breadcrumb-item"><a href="javascript: void(0);">{{isset($li2) ? $li2 : null}}</a></li>
            @endif
            @if (isset($li3) )
            <li class="breadcrumb-item active">{{isset($li3) ? $li3 : ''}}</li>
            @endif
        </ol>
    </div>
</div>
