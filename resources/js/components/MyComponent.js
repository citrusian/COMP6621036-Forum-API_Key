import React from 'react';
import ReactDOM from 'react-dom/client';

function MyComponent() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
            <div id="my-component"></div>
            <script src="{{ mix('js/app.js') }}"></script>
            <script>
                ReactDOM.render(<MyComponent />, document.getElementById('my-component'));
            </script>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
