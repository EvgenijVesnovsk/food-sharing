<div class="container mt-3">
    <div class="row-comment">
        <h2>@lang('productItem.comments') |2|
            <div class="pull-right">
                <a href="javascript:void(0);" id="addacomment" class="btn btn-primary">@lang('productItem.addComment')</a>
            </div>
        </h2>
    </div>
    <div class="row-comment" id="addcomment" style="display: none;">
        <form>
            <textarea class="form-control" placeholder="@lang('productItem.commentContent')"></textarea><br/>
            <button class="btn btn-primary">@lang('productItem.sendComment')</button>
        </form>
    </div>
    <hr class="hr-comment">
    <div class="row-comment comment">
        <div class="head-comment">
            <small><strong class='user-comment'>Diablo25</strong> 30.10.2017 12:13</small>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non lorem elementum, accumsan magna sed, faucibus mauris. Nulla pellentesque ante nibh, ac hendrerit ante fermentum sed. Nunc in libero dictum, porta nibh pellentesque, ultrices dolor. Curabitur nunc ipsum, blandit vel aliquam id, aliquam vel velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sit amet mi dignissim, pretium justo non, lacinia libero. Nulla facilisi. Donec id sem velit. </p>
    </div>
    <div class="row-comment comment">
        <div class="head-comment">
            <small><strong class='user-comment'>Giesche</strong> 30.10.2017 12:13</small>
        </div>
        <p>Praesent molestie ante nec metus convallis aliquam. Ut aliquam tincidunt mollis. Maecenas et ex sit amet est vehicula ultrices sed sit amet elit. Suspendisse potenti. Aenean et quam ut purus convallis porttitor. Mauris porttitor pretium elementum. Duis blandit elit tincidunt ipsum ultricies, ut faucibus lorem facilisis. Proin ipsum turpis, pharetra in lorem ac, porta ullamcorper velit. Proin gravida odio eget elit ultricies sodales. Vivamus vel tincidunt ligula. Proin pulvinar pellentesque velit eget luctus. Aliquam vitae enim ut purus vestibulum sollicitudin sit amet eget lacus. Nunc tempus fringilla tincidunt. </p>
    </div>
    <hr class="hr-comment">
</div>
