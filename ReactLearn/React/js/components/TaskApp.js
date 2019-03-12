var TaskApp = React.createClass({

    getInitialState: function () {
        return{
            items: [],
            task:''
        };
    },

    onChange: function(e){
        this.setState({task: e.target.value});
    },

    addTask: function(e){
        this.setState({
            items: this.state.items.concat([this.state.task]),
            task:''
        });

        // $('input').val('');

        e.preventDefault();
    },

    render: function(){
        return(
            <div>
                <h1>My Tasks</h1>
                <TaskList tasks={this.state.items} />
                <form className="from-inline" onSubmit={this.addTask}>
                    <input onChange={this.onChange} value={this.state.task}></input>
                    <button>Add Task</button>
                </form>
            </div>
        );
    }
});
React.render(<TaskApp />, document.getElementById('ss'));