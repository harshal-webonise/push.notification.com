var git_client = http.createClient(80,"api.github.com");
var git_event_emitter = new events.EventEmitter();

function get_activities(){
    var get_sha =git_client.request("GET","/usr/keys");
    var request =git_client.request("GET","/repos/:user/:repo/git/commits/:sha", {"host": "api.github.com"});

    request.addListener("response", function(response) {
        var body = "";
        response.addListener("data", function(data) {
            body += data;
        });

        response.addListener("end", function() {
            var tweets = JSON.parse(body);
            if(tweets.length > 0) {
                git_event_emitter.emit("commits", commits);
            }
        });
    });
    request.close();
}
setInterval(get_tweets, 5000);
