<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Notification Server</title>
 </head>
<body>
<div class="header" id="header">
    <h2>Notification Server</h2>
    <span> Git updates of webonise server</span>
</div>
<div class="container"id="commits">
    <script type="text/javascript">
        var commit_list = $("#commits");

        function load_commits() {
            $.getJSON("/stream", function(commits) {
                $.each(commits, function() {
                    $("<li>").html(this.text).prependTo(commit_list);
                });
                load_commits();
            });
        }
 setTimeout(load_commits(), 1000);
    </script>
</div>
<div class="btn" id ="comment">
    <button >Comment</button>
</div>
<div class="btn" id=" like">
    <button >Like</button>
</div>
</body>
</html>