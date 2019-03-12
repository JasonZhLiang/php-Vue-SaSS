// import Gist from './Gist';
// import GistAddForm from './GistAddForm';


var GistBox = React.createClass({

    getInitialState:function () {
        return{
            // gists:[{username:'Jason', url:'http://google.com'}]
            gists:[]
        };
    },

    addGist:function (usern) {
        var url = `https://api.github.com/users/${usern}/gists`;//this this es6 template string syntax: insert variable ${variablename}

        $.get(url,function(result){
            console.log(result);
            console.log(this);
            var username1 = result[0].owner.login;
            var url = result[0].html_url;

            var gists = this.state.gists.concat({ username1, url});
            this.setState({gists});
        }.bind(this));
    },

    render:function () {
        // var newGist = function (arrayItem) {
        //     return <Gist username={arrayItem.username} url={arrayItem.url} />
        // };

        // var newGist = (gist) => <Gist username={gist.username} url={gist.url} />;

        return(
            <div>
                <h1>GistBox</h1>
                <GistAddForm onAdd={this.addGist}/>
                {this.state.gists.map((arrayitem) => <Gist url={arrayitem.url} username={arrayitem.username1} />)}
                {/*{this.state.gists.map(newGist)}*/}
            </div>
        );
    }
});
React.render(<GistBox/>, document.querySelector('#app'));

// export default GistBox;