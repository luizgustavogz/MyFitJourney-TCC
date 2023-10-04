import React from 'react';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

function VerificationEmail() {
    const showToastMessage = () => {
        toast.error('Success Notification !', {
            position: toast.POSITION.TOP_RIGHT
        });
    };
    return (
        <div>
            <button onClick={showToastMessage}>Notify</button>
            <ToastContainer />
        </div>
    );
}

export default VerificationEmail;