var StopWatch = React.createClass({

    getInitialState: function () {
        return {
            time:0,
            until:0,
            enabled:true
        }
    },

    typing: function (e) {
        this.setState({until:e.target.value})
    },

    // start:function () {
    //     this.interval = setInterval(function () {
    //         this.tick();
    //     }.bind(this),1000);
    // },

    start:function () {

        // React.findDOMNode(this.refs.button).disabled = true;
        this.setState({enabled:false});

        this.interval = setInterval( () => {
            this.tick();

            if(this.isTimeUp()){
                this.finish();
            }
        },1000);
    },

    isTimeUp: function () {
        return this.state.time == this.state.until;
    },

    finish: function () {
        console.log('Ding Ding Ding');
        // this.setState({time:0, until:''});
        this.replaceState(this.getInitialState());
        React.findDOMNode(this.refs.input).focus();

        // React.findDOMNode(this.refs.button).disabled = false;
        // this.setState({enabled:true});

        return clearInterval(this.interval);
    },

    tick: function () {
        this.setState({time: this.state.time +1})
    },

    render: function () {
        return (
            <div>
                <input ref="input" onChange={this.typing} value={this.state.until}></input>
                {/*<input ref={function (c) {React.findDOMNode(c).focus()}} onChange={this.typing} value={this.state.until}></input>*/}

                {/*<button ref="button" onClick={this.start}>Go</button>*/}
                <button disabled={! this.state.enabled} onClick={this.start}>Go</button>
                <h1>{this.state.time}</h1>
            </div>
        );
    }
});
React.render(<StopWatch/>, document.body);
