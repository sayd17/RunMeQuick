# RunMeQuick

## Goal

RunMeQuick aims to provide a cloud-hosted code runner to enhance ease and accelerate velocity during prototyping. The product allows users to input code, choose a runtime (at least 4 different languages), and view the execution results. The focus for the first sprint (2 weeks) includes the following use cases:

## Tasks

### Registration

- As a guest, you can create an account with RunMeQuick.
- Registration requires providing an email, username, and password.

### Authentication

- As a user, you can log in to your RunMeQuick account using your email and password.

### Code Execution

- As a guest or user:
  - You can execute a piece of code provided as text (file upload is not supported).
  - The code must be valid and complete for successful execution.
  - You can choose the runtime for your code execution (at least 4 languages supported).
  - Immediate status updates are shown: Queued, Executing, and Execution Complete.
  - After execution is complete, you can view the result.
  - You can cancel execution if it has not started.
  - You can modify your code and resubmit, canceling previous submissions in the Queued state.

### Viewing Execution History

- As a guest (unregistered), you can only see executions during the current session.
- As a registered user:
  - You can view all your previous executions.
  - Each execution entry includes the execution status and result.

## Usage

1. **Registration:**
   - Visit the RunMeQuick website.
   - Click on the "Register" button.
   - Provide a unique email, username, and password.
   - Click "Submit."

2. **Authentication:**
   - On the homepage, click "Login."
   - Enter your email and password.
   - Click "Login."

3. **Code Execution:**
   - On the dashboard, enter your code in the provided text input.
   - Choose the runtime from the dropdown menu.
   - Click "Submit."
   - Monitor the status updates and view the result.

4. **Execution History:**
   - Click on the "Execution History" tab to view your previous executions.

## Note

- This project is currently in development, and additional features and improvements are planned for future sprints.

Feel free to contribute or provide feedback to enhance RunMeQuick!
