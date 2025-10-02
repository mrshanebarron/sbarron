@extends('layouts.app') @section('content')
<div class="container mx-auto px-4 py-12">
  <!-- Paste your Termly privacy policy HTML here -->
  <span style="display: block;margin: 0 auto 3.125rem;width: 11.125rem;height: 2.375rem;background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzgiIGhlaWdodD0iMzgiIHZpZXdCb3g9IjAgMCAxNzggMzgiPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8cGF0aCBmaWxsPSIjRDFEMUQxIiBkPSJNNC4yODMgMjQuMTA3Yy0uNzA1IDAtMS4yNTgtLjI1Ni0xLjY2LS43NjhoLS4wODVjLjA1Ny41MDIuMDg2Ljc5Mi4wODYuODd2Mi40MzRILjk4NXYtOC42NDhoMS4zMzJsLjIzMS43NzloLjA3NmMuMzgzLS41OTQuOTUtLjg5MiAxLjcwMi0uODkyLjcxIDAgMS4yNjQuMjc0IDEuNjY1LjgyMi40MDEuNTQ4LjYwMiAxLjMwOS42MDIgMi4yODMgMCAuNjQtLjA5NCAxLjE5OC0uMjgyIDEuNjctLjE4OC40NzMtLjQ1Ni44MzMtLjgwMyAxLjA4LS4zNDcuMjQ3LS43NTYuMzctMS4yMjUuMzd6TTMuOCAxOS4xOTNjLS40MDUgMC0uNy4xMjQtLjg4Ni4zNzMtLjE4Ny4yNDktLjI4My42Ni0uMjkgMS4yMzN2LjE3N2MwIC42NDUuMDk1IDEuMTA3LjI4NyAxLjM4Ni4xOTIuMjguNDk1LjQxOS45MS40MTkuNzM0IDAgMS4xMDEtLjYwNSAxLjEwMS0xLjgxNiAwLS41OS0uMDktMS4wMzQtLjI3LTEuMzI5LS4xODItLjI5NS0uNDY1LS40NDMtLjg1Mi0uNDQzem01LjU3IDEuNzk0YzAgLjU5NC4wOTggMS4wNDQuMjkzIDEuMzQ4LjE5Ni4zMDQuNTEzLjQ1Ny45NTQuNDU3LjQzNyAwIC43NS0uMTUyLjk0Mi0uNDU0LjE5Mi0uMzAzLjI4OC0uNzUzLjI4OC0xLjM1MSAwLS41OTUtLjA5Ny0xLjA0LS4yOS0xLjMzOC0uMTk0LS4yOTctLjUxLS40NDUtLjk1LS40NDUtLjQzOCAwLS43NTMuMTQ3LS45NDYuNDQzLS4xOTQuMjk1LS4yOS43NDItLjI5IDEuMzR6bTQuMTUzIDBjMCAuOTc3LS4yNTggMS43NDItLjc3NCAyLjI5My0uNTE1LjU1Mi0xLjIzMy44MjctMi4xNTQuODI3LS41NzYgMC0xLjA4NS0uMTI2LTEuNTI1LS4zNzhhMi41MiAyLjUyIDAgMCAxLTEuMDE1LTEuMDg4Yy0uMjM3LS40NzMtLjM1NS0xLjAyNC0uMzU1LTEuNjU0IDAtLjk4MS4yNTYtMS43NDQuNzY4LTIuMjg4LjUxMi0uNTQ1IDEuMjMyLS44MTcgMi4xNi0uODE3LjU3NiAwIDEuMDg1LjEyNiAxLjUyNS4zNzYuNDQuMjUxLjc3OS42MSAxLjAxNSAxLjA4LjIzNi40NjkuMzU1IDEuMDE5LjM1NSAxLjY0OXpNMTkuNzEgMjRsLS40NjItMi4xLS42MjMtMi42NTNoLS4wMzdMMTcuNDkzIDI0SDE1LjczbC0xLjcwOC02LjAwNWgxLjYzM2wuNjkzIDIuNjU5Yy4xMS40NzYuMjI0IDEuMTMzLjMzOCAxLjk3MWguMDMyYy4wMTUtLjI3Mi4wNzctLjcwNC4xODgtMS4yOTRsLjA4Ni0uNDU3Ljc0Mi0yLjg3OWgxLjgwNGwuNzA0IDIuODc5Yy4wMTQuMDc5LjAzNy4xOTUuMDY3LjM1YTIwLjk5OCAyMC45OTggMCAwIDEgLjE2NyAxLjAwMmMuMDIzLjE2NS4wMzYuMjk5LjA0LjM5OWguMDMyYy4wMzItLjI1OC4wOS0uNjExLjE3Mi0xLjA2LjA4Mi0uNDUuMTQxLS43NTQuMTc3LS45MTFsLjcyLTIuNjU5aDEuNjA2TDIxLjQ5NCAyNGgtMS43ODN6bTcuMDg2LTQuOTUyYy0uMzQ4IDAtLjYyLjExLS44MTcuMzMtLjE5Ny4yMi0uMzEuNTMzLS4zMzguOTM3aDIuMjk5Yy0uMDA4LS40MDQtLjExMy0uNzE3LS4zMTctLjkzNy0uMjA0LS4yMi0uNDgtLjMzLS44MjctLjMzem0uMjMgNS4wNmMtLjk2NiAwLTEuNzIyLS4yNjctMi4yNjYtLjgtLjU0NC0uNTM0LS44MTYtMS4yOS0uODE2LTIuMjY3IDAtMS4wMDcuMjUxLTEuNzg1Ljc1NC0yLjMzNC41MDMtLjU1IDEuMTk5LS44MjUgMi4wODctLjgyNS44NDggMCAxLjUxLjI0MiAxLjk4Mi43MjUuNDcyLjQ4NC43MDkgMS4xNTIuNzA5IDIuMDA0di43OTVoLTMuODczYy4wMTguNDY1LjE1Ni44MjkuNDE0IDEuMDkuMjU4LjI2MS42Mi4zOTIgMS4wODUuMzkyLjM2MSAwIC43MDMtLjAzNyAxLjAyNi0uMTEzYTUuMTMzIDUuMTMzIDAgMCAwIDEuMDEtLjM2djEuMjY4Yy0uMjg3LjE0My0uNTkzLjI1LS45Mi4zMmE1Ljc5IDUuNzkgMCAwIDEtMS4xOTEuMTA0em03LjI1My02LjIyNmMuMjIyIDAgLjQwNi4wMTYuNTUzLjA0OWwtLjEyNCAxLjUzNmExLjg3NyAxLjg3NyAwIDAgMC0uNDgzLS4wNTRjLS41MjMgMC0uOTMuMTM0LTEuMjIyLjQwMy0uMjkyLjI2OC0uNDM4LjY0NC0uNDM4IDEuMTI4VjI0aC0xLjYzOHYtNi4wMDVoMS4yNGwuMjQyIDEuMDFoLjA4Yy4xODctLjMzNy40MzktLjYwOC43NTYtLjgxNGExLjg2IDEuODYgMCAwIDEgMS4wMzQtLjMwOXptNC4wMjkgMS4xNjZjLS4zNDcgMC0uNjIuMTEtLjgxNy4zMy0uMTk3LjIyLS4zMS41MzMtLjMzOC45MzdoMi4yOTljLS4wMDctLjQwNC0uMTEzLS43MTctLjMxNy0uOTM3LS4yMDQtLjIyLS40OC0uMzMtLjgyNy0uMzN6bS4yMyA1LjA2Yy0uOTY2IDAtMS43MjItLjI2Ny0yLjI2Ni0uOC0uNTQ0LS41MzQtLjgxNi0xLjI5LS44MTYtMi4yNjcgMC0xLjAwNy4yNTEtMS43ODUuNzU0LTIuMzM0LjUwNC0uNTUgMS4yLS44MjUgMi4wODctLjgyNS44NDkgMCAxLjUxLjI0MiAxLjk4Mi43MjUuNDczLjQ4NC43MDkgMS4xNTIuNzA5IDIuMDA0di43OTVoLTMuODczYy4wMTguNDY1LjE1Ni44MjkuNDE0IDEuMDkuMjU4LjI2MS42Mi4zOTIgMS4wODUuMzkyLjM2MiAwIC43MDQtLjAzNyAxLjAyNi0uMTEzYTUuMTMzIDUuMTMzIDAgMCAwIDEuMDEtLjM2djEuMjY4Yy0uMjg3LjE0My0uNTkzLjI1LS45MTkuMzJhNS43OSA1Ljc5IDAgMCAxLTEuMTkyLjEwNHptNS44MDMgMGMtLjcwNiAwLTEuMjYtLjI3NS0xLjY2My0uODIyLS40MDMtLjU0OC0uNjA0LTEuMzA3LS42MDQtMi4yNzggMC0uOTg0LjIwNS0xLjc1Mi42MTUtMi4zMDEuNDEtLjU1Ljk3NS0uODI1IDEuNjk1LS44MjUuNzU1IDAgMS4zMzIuMjk0IDEuNzI5Ljg4MWguMDU0YTYuNjk3IDYuNjk3IDAgMCAxLS4xMjQtMS4xOTh2LTEuOTIyaDEuNjQ0VjI0SDQ2LjQzbC0uMzE3LS43NzloLS4wN2MtLjM3Mi41OTEtLjk0Ljg4Ni0xLjcwMi44ODZ6bS41NzQtMS4zMDZjLjQyIDAgLjcyNi0uMTIxLjkyMS0uMzY1LjE5Ni0uMjQzLjMwMi0uNjU3LjMyLTEuMjR2LS4xNzhjMC0uNjQ0LS4xLTEuMTA2LS4yOTgtMS4zODYtLjE5OS0uMjc5LS41MjItLjQxOS0uOTctLjQxOWEuOTYyLjk2MiAwIDAgMC0uODUuNDY1Yy0uMjAzLjMxLS4zMDQuNzYtLjMwNCAxLjM1IDAgLjU5Mi4xMDIgMS4wMzUuMzA2IDEuMzMuMjA0LjI5Ni40OTYuNDQzLjg3NS40NDN6bTEwLjkyMi00LjkyYy43MDkgMCAxLjI2NC4yNzcgMS42NjUuODMuNC41NTMuNjAxIDEuMzEyLjYwMSAyLjI3NSAwIC45OTItLjIwNiAxLjc2LS42MiAyLjMwNC0uNDE0LjU0NC0uOTc3LjgxNi0xLjY5LjgxNi0uNzA1IDAtMS4yNTgtLjI1Ni0xLjY1OS0uNzY4aC0uMTEzbC0uMjc0LjY2MWgtMS4yNTF2LTguMzU3aDEuNjM4djEuOTQ0YzAgLjI0Ny0uMDIxLjY0My0uMDY0IDEuMTg3aC4wNjRjLjM4My0uNTk0Ljk1LS44OTIgMS43MDMtLjg5MnptLS41MjcgMS4zMWMtLjQwNCAwLS43LjEyNS0uODg2LjM3NC0uMTg2LjI0OS0uMjgzLjY2LS4yOSAxLjIzM3YuMTc3YzAgLjY0NS4wOTYgMS4xMDcuMjg3IDEuMzg2LjE5Mi4yOC40OTUuNDE5LjkxLjQxOS4zMzcgMCAuNjA1LS4xNTUuODA0LS40NjUuMTk5LS4zMS4yOTgtLjc2LjI5OC0xLjM1IDAtLjU5MS0uMS0xLjAzNS0uMy0xLjMzYS45NDMuOTQzIDAgMCAwLS44MjMtLjQ0M3ptMy4xODYtMS4xOTdoMS43OTRsMS4xMzQgMy4zNzljLjA5Ni4yOTMuMTYzLjY0LjE5OCAxLjA0MmguMDMzYy4wMzktLjM3LjExNi0uNzE3LjIzLTEuMDQybDEuMTEyLTMuMzc5aDEuNzU3bC0yLjU0IDYuNzczYy0uMjM0LjYyNy0uNTY2IDEuMDk2LS45OTcgMS40MDctLjQzMi4zMTItLjkzNi40NjgtMS41MTIuNDY4LS4yODMgMC0uNTYtLjAzLS44MzMtLjA5MnYtMS4zYTIuOCAyLjggMCAwIDAgLjY0NS4wN2MuMjkgMCAuNTQzLS4wODguNzYtLjI2Ni4yMTctLjE3Ny4zODYtLjQ0NC41MDgtLjgwM2wuMDk2LS4yOTUtMi4zODUtNS45NjJ6Ii8+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNzMpIj4KICAgICAgICAgICAgPGNpcmNsZSBjeD0iMTkiIGN5PSIxOSIgcj0iMTkiIGZpbGw9IiNFMEUwRTAiLz4KICAgICAgICAgICAgPHBhdGggZmlsbD0iI0ZGRiIgZD0iTTIyLjQ3NCAxNS40NDNoNS4xNjJMMTIuNDM2IDMwLjRWMTAuMzYzaDE1LjJsLTUuMTYyIDUuMDh6Ii8+CiAgICAgICAgPC9nPgogICAgICAgIDxwYXRoIGZpbGw9IiNEMkQyRDIiIGQ9Ik0xMjEuNTQ0IDE0LjU2di0xLjcyOGg4LjI3MnYxLjcyOGgtMy4wMjRWMjRoLTIuMjR2LTkuNDRoLTMuMDA4em0xMy43NDQgOS41NjhjLTEuMjkgMC0yLjM0MS0uNDE5LTMuMTUyLTEuMjU2LS44MS0uODM3LTEuMjE2LTEuOTQ0LTEuMjE2LTMuMzJzLjQwOC0yLjQ3NyAxLjIyNC0zLjMwNGMuODE2LS44MjcgMS44NzItMS4yNCAzLjE2OC0xLjI0czIuMzYuNDAzIDMuMTkyIDEuMjA4Yy44MzIuODA1IDEuMjQ4IDEuODggMS4yNDggMy4yMjQgMCAuMzEtLjAyMS41OTctLjA2NC44NjRoLTYuNDY0Yy4wNTMuNTc2LjI2NyAxLjA0LjY0IDEuMzkyLjM3My4zNTIuODQ4LjUyOCAxLjQyNC41MjguNzc5IDAgMS4zNTUtLjMyIDEuNzI4LS45NmgyLjQzMmEzLjg5MSAzLjg5MSAwIDAgMS0xLjQ4OCAyLjA2NGMtLjczNi41MzMtMS42MjcuOC0yLjY3Mi44em0xLjQ4LTYuNjg4Yy0uNC0uMzUyLS44ODMtLjUyOC0xLjQ0OC0uNTI4cy0xLjAzNy4xNzYtMS40MTYuNTI4Yy0uMzc5LjM1Mi0uNjA1LjgyMS0uNjggMS40MDhoNC4xOTJjLS4wMzItLjU4Ny0uMjQ4LTEuMDU2LS42NDgtMS40MDh6bTcuMDE2LTIuMzA0djEuNTY4Yy41OTctMS4xMyAxLjQ2MS0xLjY5NiAyLjU5Mi0xLjY5NnYyLjMwNGgtLjU2Yy0uNjcyIDAtMS4xNzkuMTY4LTEuNTIuNTA0LS4zNDEuMzM2LS41MTIuOTE1LS41MTIgMS43MzZWMjRoLTIuMjU2di04Ljg2NGgyLjI1NnptNi40NDggMHYxLjMyOGMuNTY1LS45NyAxLjQ4My0xLjQ1NiAyLjc1Mi0xLjQ1Ni42NzIgMCAxLjI3Mi4xNTUgMS44LjQ2NC41MjguMzEuOTM2Ljc1MiAxLjIyNCAxLjMyOC4zMS0uNTU1LjczMy0uOTkyIDEuMjcyLTEuMzEyYTMuNDg4IDMuNDg4IDAgMCAxIDEuODE2LS40OGMxLjA1NiAwIDEuOTA3LjMzIDIuNTUyLjk5Mi42NDUuNjYxLjk2OCAxLjU5Ljk2OCAyLjc4NFYyNGgtMi4yNHYtNC44OTZjMC0uNjkzLS4xNzYtMS4yMjQtLjUyOC0xLjU5Mi0uMzUyLS4zNjgtLjgzMi0uNTUyLTEuNDQtLjU1MnMtMS4wOS4xODQtMS40NDguNTUyYy0uMzU3LjM2OC0uNTM2Ljg5OS0uNTM2IDEuNTkyVjI0aC0yLjI0di00Ljg5NmMwLS42OTMtLjE3Ni0xLjIyNC0uNTI4LTEuNTkyLS4zNTItLjM2OC0uODMyLS41NTItMS40NC0uNTUycy0xLjA5LjE4NC0xLjQ0OC41NTJjLS4zNTcuMzY4LS41MzYuODk5LS41MzYgMS41OTJWMjRoLTIuMjU2di04Ljg2NGgyLjI1NnpNMTY0LjkzNiAyNFYxMi4xNmgyLjI1NlYyNGgtMi4yNTZ6bTcuMDQtLjE2bC0zLjQ3Mi04LjcwNGgyLjUyOGwyLjI1NiA2LjMwNCAyLjM4NC02LjMwNGgyLjM1MmwtNS41MzYgMTMuMDU2aC0yLjM1MmwxLjg0LTQuMzUyeiIvPgogICAgPC9nPgo8L3N2Zz4K) center no-repeat;"></span>
  <div style="max-width:1400px;margin:0 auto;padding:12px 40px;" data-custom-class="prose prose-lg">
    <div>
      <strong><span style="font-size: 26px;"><span data-custom-class="title"><span class="block-component"></span><span class="question"></span></span></span></strong>
      <h1><strong><span class="question">PRIVACY POLICY</span></strong></h1><strong><span class="statement-end-if-in-editor"></span></strong>
    </div>
    <div>
      <span style="color: rgb(127, 127, 127);"><strong><span style="font-size: 15px;"><span data-custom-class="subtitle">Last updated <span class="question">October 01, 2025</span></span></span></strong></span>
    </div>
    <div>
      <br>
    </div>
    <div>
      <br>
    </div>
    <div>
      <br>
    </div>
    <div style="line-height: 1.5;">
      <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">This Privacy Notice for <span class="question noTranslate">Shane Barron</span><span class="block-component"></span></span> (<span class="block-component"></span>"<strong>we</strong>," "<strong>us</strong>," or "<strong>our</strong>"<span class="statement-end-if-in-editor"></span></span><span data-custom-class="body_text">), describes how and why we might access, collect, store, use, and/or share (<span class="block-component"></span>"<strong>process</strong>"<span class="statement-end-if-in-editor"></span>) your personal information when you use our services (<span class="block-component"></span>"<strong>Services</strong>"<span class="statement-end-if-in-editor"></span>), including when you:</span></span><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span>
    </div>
    <ul>
      <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Visit our website<span class="block-component"></span> at <span style="color: rgb(0, 58, 250);"><span class="question noTranslate"><a target="_blank" data-custom-class="link" href="https://sbarron.com">https://sbarron.com</a></span></span> <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor">or any website of ours that links to this Privacy Notice</span></span></span></span></span></span></span></span></span></li>
    </ul>
    <div>
      <span class="block-component"><span style="font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span></span></span>
      <div style="line-height: 1.5;">
        <span class="block-component"><span style="font-size: 15px;"></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Use <span class="question">Laravel Development & Consulting Services</span>. <span class="question">Professional Laravel development and consulting services. I provide custom web application development, AI-accelerated development with expert validation, and open-source Laravel plugins. Services include domain registration, managed hosting, custom development, and ongoing support.</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Engage with us in other related ways, including any sales, marketing, or events<span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><strong>Questions or concerns?&nbsp;</strong>Reading this Privacy Notice will help you understand your privacy rights and choices. We are responsible for making decisions about how your personal information is processed. If you do not agree with our policies and practices, please do not use our Services.<span class="block-component"></span> If you still have any questions or concerns, please contact us at <span class="question noTranslate"><a target="_blank" data-custom-class="link" href="mailto:mrshanebarron@gmail.com">mrshanebarron@gmail.com</a></span>.</span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <strong><span style="font-size: 15px;"><span data-custom-class="heading_1"></span></span></strong>
        <h2><strong><span style="font-size: 15px;">SUMMARY OF KEY POINTS</span></strong></h2>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong><em>This summary provides key points from our Privacy Notice, but you can find out more details about any of these topics by clicking the link following each key point or by using our&nbsp;</em></strong></span></span><a data-custom-class="link" href="#toc"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text"><strong><em>table of contents</em></strong></span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text"><strong><em>&nbsp;below to find the section you are looking for.</em></strong></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>What personal information do we process?</strong> When you visit, use, or navigate our Services, we may process personal information depending on how you interact with us and the Services, the choices you make, and the products and features you use. Learn more about&nbsp;</span></span><a data-custom-class="link" href="#personalinfo"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">personal information you disclose to us</span></span></a><span data-custom-class="body_text">.</span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Do we process any sensitive personal information?&nbsp;</strong>Some of the information may be considered <span class="block-component"></span>"special" or "sensitive"<span class="statement-end-if-in-editor"></span> in certain jurisdictions, for example your racial or ethnic origins, sexual orientation, and religious beliefs. <span class="block-component"></span>We do not process sensitive personal information.<span class="else-block"></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Do we collect any information from third parties?</strong> <span class="block-component"></span>We do not collect any information from third parties.<span class="else-block"></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>How do we process your information?</strong> We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent. We process your information only when we have a valid legal reason to do so. Learn more about&nbsp;</span></span><a data-custom-class="link" href="#infouse"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">how we process your information</span></span></a><span data-custom-class="body_text">.</span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>In what situations and with which <span class="block-component"></span>parties do we share personal information?</strong> We may share information in specific situations and with specific <span class="block-component"></span>third parties. Learn more about&nbsp;</span></span><a data-custom-class="link" href="#whoshare"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">when and with whom we share your personal information</span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text">.<span class="block-component"></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>How do we keep your information safe?</strong> We have adequate <span class="block-component"></span>organizational<span class="statement-end-if-in-editor"></span> and technical processes and procedures in place to protect your personal information. However, no electronic transmission over the internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other <span class="block-component"></span>unauthorized<span class="statement-end-if-in-editor"></span> third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Learn more about&nbsp;</span></span><a data-custom-class="link" href="#infosafe"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">how we keep your information safe</span></span></a><span data-custom-class="body_text">.</span><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>What are your rights?</strong> Depending on where you are located geographically, the applicable privacy law may mean you have certain rights regarding your personal information. Learn more about&nbsp;</span></span><a data-custom-class="link" href="#privacyrights"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">your privacy rights</span></span></a><span data-custom-class="body_text">.</span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>How do you exercise your rights?</strong> The easiest way to exercise your rights is by <span class="block-component">submitting a&nbsp;</span></span></span><a data-custom-class="link" href="https://app.termly.io/dsar/5e20aaa5-fbe0-4cd3-9a4a-953179d879ab" rel="noopener noreferrer" target="_blank"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">data subject access request</span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span>, or by contacting us. We will consider and act upon any request in accordance with applicable data protection laws.</span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text">Want to learn more about what we do with any information we collect?&nbsp;</span></span><a data-custom-class="link" href="#toc"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">Review the Privacy Notice in full</span></span></a><span style="font-size: 15px;"><span data-custom-class="body_text">.</span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div id="toc" style="line-height: 1.5;">
        <span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span>
        <h2><span style="font-size: 15px;"><strong>TABLE OF CONTENTS</strong></span></h2>&nbsp;&nbsp;&nbsp;
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#infocollect"><span style="color: rgb(0, 58, 250);">1. WHAT INFORMATION DO WE COLLECT?</span></a></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#infouse"><span style="color: rgb(0, 58, 250);">2. HOW DO WE PROCESS YOUR INFORMATION?<span class="block-component"></span></span></a></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#legalbases"><span style="color: rgb(0, 58, 250);">3. <span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);">WHAT LEGAL BASES DO WE RELY ON TO PROCESS YOUR PERSONAL INFORMATION?</span></span><span class="statement-end-if-in-editor"></span></span></a></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="#whoshare">4. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a></span><span data-custom-class="body_text"><span class="block-component"></span> <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span class="block-component"></span></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#cookies"><span style="color: rgb(0, 58, 250);">5. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span><span class="block-component"></span></span>
      </div>
      <div style="line-height: 1.5;">
        <a data-custom-class="link" href="#ai"><span style="color: rgb (0, 58, 250);">6. DO WE OFFER ARTIFICIAL INTELLIGENCE-BASED PRODUCTS?</span></a><span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span class="block-component"></span></span></span><span class="block-component"></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#inforetain"><span style="color: rgb(0, 58, 250);">7. HOW LONG DO WE KEEP YOUR INFORMATION?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span class="block-component"></span></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#infosafe"><span style="color: rgb(0, 58, 250);">8. HOW DO WE KEEP YOUR INFORMATION SAFE?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#infominors"><span style="color: rgb(0, 58, 250);">9. DO WE COLLECT INFORMATION FROM MINORS?</span></a><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="#privacyrights">10. WHAT ARE YOUR PRIVACY RIGHTS?</a></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#DNT"><span style="color: rgb(0, 58, 250);">11. CONTROLS FOR DO-NOT-TRACK FEATURES<span class="block-component"></span></span></a></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#uslaws"><span style="color: rgb(0, 58, 250);">12. DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</span></a></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span class="block-component"><span style="font-size: 15px;"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span> <span class="block-component"></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><a data-custom-class="link" href="#policyupdates"><span style="color: rgb(0, 58, 250);">13. DO WE MAKE UPDATES TO THIS NOTICE?</span></a></span>
      </div>
      <div style="line-height: 1.5;">
        <a data-custom-class="link" href="#contact"><span style="color: rgb(0, 58, 250); font-size: 15px;">14. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></a>
      </div>
      <div style="line-height: 1.5;">
        <a data-custom-class="link" href="#request"><span style="color: rgb(0, 58, 250);">15. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</span></a>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div id="infocollect" style="line-height: 1.5;">
        <span style="color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0); font-size: 15px;"><span style="font-size: 15px; color: rgb(0, 0, 0);"><span style="font-size: 15px; color: rgb(0, 0, 0);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
        <h2><span style="color: rgb(0, 0, 0);"><strong>1. WHAT INFORMATION DO WE COLLECT?</strong></span></h2><span data-custom-class="heading_2" id="personalinfo" style="color: rgb(0, 0, 0);"><span style="font-size: 15px;"><strong></strong></span></span>
        <h3><span data-custom-class="heading_2" id="personalinfo" style="color: rgb(0, 0, 0);"><strong>Personal information you disclose to us</strong></span></h3><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong></span></span></span></span><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>&nbsp;</em></strong><em>We collect personal information that you provide to us.</em></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We collect personal information that you voluntarily provide to us when you <span style="font-size: 15px;"><span class="block-component"></span></span>register on the Services,&nbsp;</span><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span></span><span data-custom-class="body_text">express an interest in obtaining information about us or our products and Services, when you participate in activities on the Services, or otherwise when you contact us.</span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span class="block-component"></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Personal Information Provided by You.</strong> The personal information that we collect depends on the context of your interactions with us and the Services, the choices you make, and the products and features you use. The personal information we collect may include the following:<span style="font-size: 15px;"><span data-custom-class="body_text"><span class="forloop-component"></span></span></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="question">names</span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="forloop-component"></span></span></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="question">email addresses</span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="forloop-component"></span></span></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="question">usernames</span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="forloop-component"></span></span></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="question">passwords</span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="forloop-component"></span></span><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span></span></span></span>
      </div>
      <div id="sensitiveinfo" style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Sensitive Information.</strong> <span class="block-component"></span>We do not process sensitive information.</span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="else-block"></span></span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"><span class="block-component"></span></span></span></span></span></span><span class="block-component"></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">All personal information that you provide to us must be true, complete, and accurate, and you must notify us of any changes to such personal information.</span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span><span data-custom-class="heading_2" style="color: rgb(0, 0, 0);"><span style="font-size: 15px;"><strong></strong></span></span>
        <h3><span data-custom-class="heading_2" style="color: rgb(0, 0, 0);"><strong>Information automatically collected</strong></span></h3><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong></span></span></span></span><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>&nbsp;</em></strong><em>Some information — such as your Internet Protocol (IP) address and/or browser and device characteristics — is collected automatically when you visit our Services.</em></span></span></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We automatically collect certain information when you visit, use, or navigate the Services. This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use our Services, and other technical information. This information is primarily needed to maintain the security and operation of our Services, and for our internal analytics and reporting purposes.</span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Like many businesses, we also collect information through cookies and similar technologies. <span class="block-component"></span><span class="block-component"></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"><span data-custom-class="body_text"></span></span></span><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">The information we collect includes:<span class="block-component"></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><em>Log and Usage Data.</em> Log and usage data is service-related, diagnostic, usage, and performance information our servers automatically collect when you access or use our Services and which we record in log files. Depending on how you interact with us, this log data may include your IP address, device information, browser type, and settings and information about your activity in the Services<span style="font-size: 15px;">&nbsp;</span>(such as the date/time stamps associated with your usage, pages and files viewed, searches, and other actions you take such as which features you use), device event information (such as system activity, error reports (sometimes called <span class="block-component"></span>"crash dumps"<span class="statement-end-if-in-editor"></span>), and hardware settings).<span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><em>Device Data.</em> We collect device data such as information about your computer, phone, tablet, or other device you use to access the Services. Depending on the device used, this device data may include information such as your IP address (or proxy server), device and application identification numbers, location, browser type, hardware model, Internet service provider and/or mobile carrier, operating system, and system configuration information.<span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><em>Location Data.</em> We collect location data such as information about your device's location, which can be either precise or imprecise. How much information we collect depends on the type and settings of the device you use to access the Services. For example, we may use GPS and other technologies to collect geolocation data that tells us your current location (based on your IP address). You can opt out of allowing us to collect this information either by refusing access to the information or by disabling your Location setting on your device. However, if you choose to opt out, you may not be able to use certain aspects of the Services.<span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></li>
      </ul>
      <div>
        <span class="block-component"><span style="font-size: 15px;"></span></span> <span class="statement-end-if-in-editor"></span> <span class="block-component"><span style="font-size: 15px;"></span></span> <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"><span class="block-component"></span></span></span></span></span></span></span></span></span> <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div id="infouse" style="line-height: 1.5;">
        <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
        <h2><span style="color: rgb(127, 127, 127);"><strong>2. HOW DO WE PROCESS YOUR INFORMATION?</strong></span></h2><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:&nbsp;</em></strong><em>We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law.<span class="block-component"></span> We process the personal information for the following purposes listed below.<span class="statement-end-if-in-editor"></span> We may also process your information for other purposes <span class="block-component"></span>only with your prior explicit<span class="else-block"></span> consent.</em></span></span></span></span>
      </div>
      <div style="line-height: 1.5;">
        <br>
      </div>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>We process your personal information for a variety of reasons, depending on how you interact with our Services, including:</strong><span class="block-component"></span></span></span></span>
      </div>
      <ul>
        <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To facilitate account creation and authentication and otherwise manage user accounts.&nbsp;</strong>We may process your information so you can create and log in to your account, as well as keep your account in working order.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></span></span></span></span></li>
      </ul>
      <div style="line-height: 1.5;">
        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
        <div style="line-height: 1.5;">
          <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
          <div style="line-height: 1.5;">
            <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
            <div style="line-height: 1.5;">
              <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
              <div style="line-height: 1.5;">
                <span class="block-component"><span style="font-size: 15px;"></span></span>
                <div style="line-height: 1.5;">
                  <span class="block-component"><span style="font-size: 15px;"></span></span>
                  <div style="line-height: 1.5;">
                    <span class="block-component"><span style="font-size: 15px;"></span></span>
                    <div style="line-height: 1.5;">
                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                      <p style="font-size: 15px; line-height: 1.5;"><span class="block-component"><span style="font-size: 15px;"></span></span> </p>
                      <p style="font-size: 15px; line-height: 1.5;"><span class="block-component"><span style="font-size: 15px;"></span></span> </p>
                      <p style="font-size: 15px; line-height: 1.5;"><span class="block-component"></span> </p>
                      <p style="font-size: 15px; line-height: 1.5;"><span class="block-component"></span> </p>
                      <div style="line-height: 1.5;">
                        <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                        <div style="line-height: 1.5;">
                          <span class="block-component"><span style="font-size: 15px;"></span></span>
                          <div style="line-height: 1.5;">
                            <span class="block-component"><span style="font-size: 15px;"></span></span>
                            <div style="line-height: 1.5;">
                              <span style="font-size: 15px;"><span class="block-component"><span data-custom-class="body_text"></span></span></span>
                              <div style="line-height: 1.5;">
                                <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                <div style="line-height: 1.5;">
                                  <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                  <div style="line-height: 1.5;">
                                    <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                    <div style="line-height: 1.5;">
                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                      <div style="line-height: 1.5;">
                                        <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                        <div style="line-height: 1.5;">
                                          <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                          <div style="line-height: 1.5;">
                                            <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                            <div style="line-height: 1.5;">
                                              <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                              <div style="line-height: 1.5;">
                                                <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                <div style="line-height: 1.5;">
                                                  <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                  <div style="line-height: 1.5;">
                                                    <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                  </div>
                                                  <ul>
                                                    <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>To save or protect an individual's vital interest.</strong> We may process your information when necessary to save or protect an individual’s vital interest, such as to prevent harm.</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span></li>
                                                  </ul>
                                                  <div style="line-height: 1.5;">
                                                    <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <br>
                                                  </div>
                                                  <div id="legalbases" style="line-height: 1.5;">
                                                    <strong><span style="font-size: 15px;"><span data-custom-class="heading_1"></span></span></strong>
                                                    <h2><strong><span style="font-size: 15px;">3. WHAT LEGAL BASES DO WE RELY ON TO PROCESS YOUR INFORMATION?</span></strong></h2><em><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>In Short:&nbsp;</strong>We only process your personal information when we believe it is necessary and we have a valid legal reason (i.e.<span class="block-component"></span>,<span class="statement-end-if-in-editor"></span> legal basis) to do so under applicable law, like with your consent, to comply with laws, to provide you with services to enter into or <span class="block-component"></span>fulfill<span class="statement-end-if-in-editor"></span> our contractual obligations, to protect your rights, or to <span class="block-component"></span>fulfill<span class="statement-end-if-in-editor"></span> our legitimate business interests.</span></span></em>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span><span data-custom-class="body_text"><span class="block-component"></span></span></span>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <br>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <em><span style="font-size: 15px;"><span data-custom-class="body_text"><strong><u>If you are located in the EU or UK, this section applies to you.</u></strong></span></span></em>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <br>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span>
                                                  </div>
                                                  <div style="line-height: 1.5;">
                                                    <span style="font-size: 15px;"><span data-custom-class="body_text">The General Data Protection Regulation (GDPR) and UK GDPR require us to explain the valid legal bases we rely on in order to process your personal information. As such, we may rely on the following legal bases to process your personal information:</span></span>
                                                  </div>
                                                  <ul>
                                                    <li data-custom-class="body_text" style="line-height: 1.5;">
                                                      <span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Consent.&nbsp;</strong>We may process your information if you have given us permission (i.e.<span class="block-component"></span>,<span class="statement-end-if-in-editor"></span> consent) to use your personal information for a specific purpose. You can withdraw your consent at any time. Learn more about&nbsp;</span></span><a data-custom-class="link" href="#withdrawconsent"><span style="color: rgb(0, 58, 250); font-size: 15px;"><span data-custom-class="body_text">withdrawing your consent</span></span></a><span data-custom-class="body_text">.</span>
                                                    </li>
                                                  </ul>
                                                  <div style="line-height: 1.5;">
                                                    <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>Legal Obligations.</strong> We may process your information where we believe it is necessary for compliance with our legal obligations, such as to cooperate with a law enforcement body or regulatory agency, exercise or defend our legal rights, or disclose your information as evidence in litigation in which we are involved.<span class="statement-end-if-in-editor"></span><br></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><strong>Vital Interests.</strong> We may process your information where we believe it is necessary to protect your vital interests or the vital interests of a third party, such as situations involving potential threats to the safety of any person.</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="block-component"><span class="block-component"></span></span></span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <br>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;"><strong><u><em>If you are located in Canada, this section applies to you.</em></u></strong></span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <br>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;">We may process your information if you have given us specific permission (i.e.<span class="block-component"></span>,<span class="statement-end-if-in-editor"></span> express consent) to use your personal information for a specific purpose, or in situations where your permission can be inferred (i.e.<span class="block-component"></span>,<span class="statement-end-if-in-editor"></span> implied consent). You can&nbsp;</span></span><a data-custom-class="link" href="#withdrawconsent"><span data-custom-class="body_text"><span style="color: rgb(0, 58, 250); font-size: 15px;">withdraw your consent</span></span></a><span data-custom-class="body_text"><span style="font-size: 15px;">&nbsp;at any time.</span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <br>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;">In some exceptional cases, we may be legally permitted under applicable law to process your information without your consent, including, for example:</span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">If collection is clearly in the interests of an individual and consent cannot be obtained in a timely way</span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="block-component"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">For investigations and fraud detection and prevention<span class="statement-end-if-in-editor"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">For business transactions provided certain conditions are met</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">If it is contained in a witness statement and the collection is necessary to assess, process, or settle an insurance claim</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">For identifying injured, ill, or deceased persons and communicating with next of kin</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="block-component"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">If we have reasonable grounds to believe an individual has been, is, or may be victim of financial abuse<span class="statement-end-if-in-editor"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="block-component"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">If it is reasonable to expect collection and use with consent would compromise the availability or the accuracy of the information and the collection is reasonable for purposes related to investigating a breach of an agreement or a contravention of the laws of Canada or a province<span class="statement-end-if-in-editor"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="block-component"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;">If disclosure is required to comply with a subpoena, warrant, court order, or rules of the court relating to the production of records<span class="statement-end-if-in-editor"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">If it was produced by an individual in the course of their employment, business, or profession and the collection is consistent with the purposes for which the information was produced<span class="statement-end-if-in-editor"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">If the collection is solely for journalistic, artistic, or literary purposes<span class="statement-end-if-in-editor"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">If the information is publicly available and is specified by the regulations</span><span class="statement-end-if-in-editor"><span data-custom-class="body_text"></span></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">We may disclose de-identified information for approved research or statistics projects, subject to ethics oversight and confidentiality commitments</span><span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <br>
                                                    </div>
                                                    <div id="whoshare" style="line-height: 1.5;">
                                                      <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                      <h2><span style="color: rgb(127, 127, 127);"><strong>4. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em>&nbsp;We may share information in specific situations described in this section and/or with the following <span class="block-component"></span>third parties.</em></span></span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <br>
                                                    </div>
                                                    <div style="line-height: 1.5;">
                                                      <span style="font-size: 15px;"><span data-custom-class="body_text">We <span class="block-component"></span>may need to share your personal information in the following situations:</span></span>
                                                    </div>
                                                    <ul>
                                                      <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><strong>Business Transfers.</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</span></span></li>
                                                    </ul>
                                                    <div style="line-height: 1.5;">
                                                      <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span>
                                                      <div style="line-height: 1.5;">
                                                        <span style="font-size: 15px;"><span class="block-component"><span data-custom-class="body_text"></span></span></span>
                                                        <div style="line-height: 1.5;">
                                                          <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                          <div style="line-height: 1.5;">
                                                            <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                            <div style="line-height: 1.5;">
                                                              <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                              <div style="line-height: 1.5;">
                                                                <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="block-component"><span data-custom-class="heading_1"><span class="block-component"></span></span></span></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="cookies" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>5. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em>&nbsp;We may use cookies and other tracking technologies to collect and store your information.</em></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may use cookies and similar tracking technologies (like web beacons and pixels) to gather information when you interact with our Services. Some online tracking technologies help us maintain the security of our Services<span class="block-component"></span> and your account<span class="statement-end-if-in-editor"></span>, prevent crashes, fix bugs, save your preferences, and assist with basic site functions.</span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We also permit third parties and service providers to use online tracking technologies on our Services for analytics and advertising, including to help manage and display advertisements, to tailor advertisements to your interests, or to send abandoned shopping cart reminders (depending on your communication preferences). The third parties and service providers use their technology to provide advertising about products and services tailored to your interests which may appear either on our Services or on other websites.</span></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><br></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">To the extent these online tracking technologies are deemed to be a <span class="block-component"></span>"sale"/"sharing"<span class="statement-end-if-in-editor"></span> (which includes targeted advertising, as defined under the applicable laws) under applicable US state laws, you can opt out of these online tracking technologies by submitting a request as described below under section <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span><span data-custom-class="body_text"><a data-custom-class="link" href="#uslaws"><span style="color: rgb(0, 58, 250); font-size: 15px;">DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</span></a></span><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span><span class="statement-end-if-in-editor"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Notice<span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span>.</span></span></span></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span> <span style="font-size: 15px;"><strong><span data-custom-class="heading_2"></span></strong></span>
                                                                <h3><span style="font-size: 15px;"><strong>Google Analytics</strong></span></h3><span data-custom-class="body_text">We may share your information with Google Analytics to track and <span class="block-component"></span>analyze<span class="statement-end-if-in-editor"></span> the use of the Services.<span class="block-component"></span> The Google Analytics Advertising Features that we may use include: <span class="forloop-component"></span><span class="block-component"></span><span class="question">Google Display Network Impressions Reporting</span><span class="block-component"></span><span class="forloop-component"></span>.<span class="statement-end-if-in-editor"></span> To opt out of being tracked by Google Analytics across the Services, visit <span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="https://tools.google.com/dlpage/gaoptout" rel="noopener noreferrer" target="_blank">https://tools.google.com/dlpage/gaoptout</a>.</span><span class="block-component"></span> You can opt out of Google Analytics Advertising Features through <span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="https://adssettings.google.com/" rel="noopener noreferrer" target="_blank">Ads Settings</a></span> and Ad Settings for mobile apps. Other opt out means include <span style="color: rgb(0, 58, 250);"><span style="color: rbg(0, 58, 250);"><a data-custom-class="link" href="http://optout.networkadvertising.org/" rel="noopener noreferrer" target="_blank">http://optout.networkadvertising.org/</a></span></span> and <span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="http://www.networkadvertising.org/mobile-choice" rel="noopener noreferrer" target="_blank">http://www.networkadvertising.org/mobile-choice</a></span>.<span class="statement-end-if-in-editor"></span> For more information on the privacy practices of Google, please visit the <span style="color: rgb(0, 58, 250);"><a data-custom-class="link" href="https://policies.google.com/privacy" rel="noopener noreferrer" target="_blank">Google Privacy & Terms page</a></span>.</span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span> <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></span></span><span style="font-size: 15px;"><span class="block-component"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="ai" style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><strong><span data-custom-class="heading_1"></span></strong></span>
                                                                <h2><span style="font-size: 15px;"><strong>6. DO WE OFFER ARTIFICIAL INTELLIGENCE-BASED PRODUCTS?</strong></span></h2><strong><em><span data-custom-class="body_text">In Short:</span></em></strong><em><span data-custom-class="body_text">&nbsp;We offer products, features, or tools powered by artificial intelligence, machine learning, or similar technologies.</span></em>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">As part of our Services, we offer products, features, or tools powered by artificial intelligence, machine learning, or similar technologies (collectively, <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span>AI Products<span class="block-component"></span>"<span class="statement-end-if-in-editor"></span>). These tools are designed to enhance your experience and provide you with innovative solutions. The terms in this Privacy Notice govern your use of the AI Products within our Services.</span><span class="block-component"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><strong><span data-custom-class="body_text">Use of AI Technologies</span></strong></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">We provide the AI Products through third-party service providers (<span class="block-component"></span>"<span class="statement-end-if-in-editor"></span>AI Service Providers<span class="block-component"></span>"<span class="statement-end-if-in-editor"></span>), including <span class="forloop-component"></span><span class="block-component"></span><span class="question">claude</span><span class="block-component"></span><span class="forloop-component"></span>. As outlined in this Privacy Notice, your input, output, and personal information will be shared with and processed by these AI Service Providers to enable your use of our AI Products for purposes outlined in <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span><span data-custom-class="body_text"><a data-custom-class="link" href="#legalbases"><span style="color: rgb(0, 58, 250); font-size: 15px;">WHAT LEGAL BASES DO WE RELY ON TO PROCESS YOUR PERSONAL INFORMATION?</span></a><span style="font-size: 15px;"><span class="else-block"></span><span class="block-component"></span>"<span class="statement-end-if-in-editor"></span> You must not use the AI Products in any way that violates the terms or policies of any AI Service Provider.</span><span class="statement-end-if-in-editor"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><br></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><strong><span data-custom-class="body_text">Our AI Products</span></strong></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><br></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">Our AI Products are designed for the following functions:</span><span class="forloop-component"></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span class="question"><span data-custom-class="body_text">AI development</span></span></span></li>
                                                              </ul>
                                                              <div>
                                                                <span style="font-size: 15px;"><span class="forloop-component"></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span class="question"><span data-custom-class="body_text">AI applications</span></span></span></li>
                                                              </ul>
                                                              <div>
                                                                <span style="font-size: 15px;"><span class="forloop-component"></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><span class="question"><span data-custom-class="body_text">AI deployment</span></span></span></li>
                                                              </ul>
                                                              <div>
                                                                <span style="font-size: 15px;"><span class="forloop-component"></span><br></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><strong><span data-custom-class="body_text">How We Process Your Data Using AI</span></strong></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><br></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">All personal information processed using our AI Products is handled in line with our Privacy Notice and our agreement with third parties. This ensures high security and safeguards your personal information throughout the process, giving you peace of mind about your data's safety.</span><span class="block-component"></span><span class="statement-end-if-in-editor"></span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span><span class="block-component"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span></span></span></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="inforetain" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>7. HOW LONG DO WE KEEP YOUR INFORMATION?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:&nbsp;</em></strong><em>We keep your information for as long as necessary to <span class="block-component"></span>fulfill<span class="statement-end-if-in-editor"></span> the purposes outlined in this Privacy Notice unless otherwise required by law.</em></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We will only keep your personal information for as long as it is necessary for the purposes set out in this Privacy Notice, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements).<span class="block-component"></span> No purpose in this notice will require us keeping your personal information for longer than <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span><span class="block-component"></span>the period of time in which users have an account with us<span class="block-component"></span><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="else-block"></span></span></span></span>.</span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">When we have no ongoing legitimate business need to process your personal information, we will either delete or <span class="block-component"></span>anonymize<span class="statement-end-if-in-editor"></span> such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.<span style="color: rgb(89, 89, 89);"><span class="block-component"></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="infosafe" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>8. HOW DO WE KEEP YOUR INFORMATION SAFE?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:&nbsp;</em></strong><em>We aim to protect your personal information through a system of <span class="block-component"></span>organizational<span class="statement-end-if-in-editor"></span> and technical security measures.</em></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We have implemented appropriate and reasonable technical and <span class="block-component"></span>organizational<span class="statement-end-if-in-editor"></span> security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other <span class="block-component"></span>unauthorized<span class="statement-end-if-in-editor"></span> third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Services is at your own risk. You should only access the Services within a secure environment.<span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="infominors" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>9. DO WE COLLECT INFORMATION FROM MINORS?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em>&nbsp;We do not knowingly collect data from or market to <span class="block-component"></span>children under 18 years of age<span class="block-component"></span> or the equivalent age as specified by law in your jurisdiction<span class="statement-end-if-in-editor"></span><span class="else-block"></span>.</em><span class="block-component"></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We do not knowingly collect, solicit data from, or market to children under 18 years of age<span class="block-component"></span> or the equivalent age as specified by law in your jurisdiction<span class="statement-end-if-in-editor"></span>, nor do we knowingly sell such personal information. By using the Services, you represent that you are at least 18<span class="block-component"></span> or the equivalent age as specified by law in your jurisdiction<span class="statement-end-if-in-editor"></span> or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Services. If we learn that personal information from users less than 18 years of age<span class="block-component"></span> or the equivalent age as specified by law in your jurisdiction<span class="statement-end-if-in-editor"></span> has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18<span class="block-component"></span> or the equivalent age as specified by law in your jurisdiction<span class="statement-end-if-in-editor"></span>, please contact us at <span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span><span class="question"><a target="_blank" data-custom-class="link" href="mailto:mrshanebarron@gmail.com">mrshanebarron@gmail.com</a></span><span class="else-block"></span></span></span>.</span><span data-custom-class="body_text"><span class="else-block"><span class="block-component"></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="privacyrights" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>10. WHAT ARE YOUR PRIVACY RIGHTS?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em>&nbsp;<span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><em><span class="block-component"></span></em></span></span></span><span class="block-component"></span>Depending on your state of residence in the US or in <span class="else-block"></span>some regions, such as <span class="block-component"></span>the European Economic Area (EEA), United Kingdom (UK), Switzerland, and Canada<span class="block-component"></span>, you have rights that allow you greater access to and control over your personal information.<span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><em><span class="statement-end-if-in-editor"></span></em></span></span>&nbsp;</span>You may review, change, or terminate your account at any time, depending on your country, province, or state of residence.</em><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span class="block-component"></span></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">In some regions (like <span class="block-component"></span>the EEA, UK, Switzerland, and Canada<span class="block-component"></span>), you have certain rights under applicable data protection laws. These may include the right (i) to request access and obtain a copy of your personal information, (ii) to request rectification or erasure; (iii) to restrict the processing of your personal information; (iv) if applicable, to data portability; and (v) not to be subject to automated decision-making.<span class="block-component"></span> If a decision that produces legal or similarly significant effects is made solely by automated means, we will inform you, explain the main factors, and offer a simple way to request human review.<span class="statement-end-if-in-editor"></span> In certain circumstances, you may also have the right to object to the processing of your personal information. You can make such a request by contacting us by using the contact details provided in the section <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span></span><a data-custom-class="link" href="#contact"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span data-custom-class="body_text">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>"<span class="statement-end-if-in-editor"></span> below.</span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We will consider and act upon any request in accordance with applicable data protection laws.<span class="block-component"></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">&nbsp;</span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you are located in the EEA or UK and you believe we are unlawfully processing your personal information, you also have the right to complain to your <span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);"><span data-custom-class="body_text"><span style="color: rgb(0, 58, 250);"><span data-custom-class="body_text"><a data-custom-class="link" href="https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm" rel="noopener noreferrer" target="_blank"><span style="font-size: 15px;">Member State data protection authority</span></a></span></span></span></span></span> or&nbsp;</span></span></span><a data-custom-class="link" href="https://ico.org.uk/make-a-complaint/data-protection-complaints/data-protection-complaints/" rel="noopener noreferrer" target="_blank"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span data-custom-class="body_text">UK data protection authority</span></span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">.</span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you are located in Switzerland, you may contact the <span style="font-size: 15px;"><span style="color: rgb(0, 58, 250);"><span data-custom-class="body_text"><span style="color: rgb(0, 58, 250);"><span data-custom-class="body_text"><span style="color: rgb(0, 58, 250); font-size: 15px;"><a data-custom-class="link" href="https://www.edoeb.admin.ch/edoeb/en/home.html" rel="noopener noreferrer" target="_blank">Federal Data Protection and Information Commissioner</a></span></span></span></span></span></span>.</span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="withdrawconsent" style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><u>Withdrawing your consent:</u></strong> If we are relying on your consent to process your personal information,<span class="block-component"></span> which may be express and/or implied consent depending on the applicable law,<span class="statement-end-if-in-editor"></span> you have the right to withdraw your consent at any time. You can withdraw your consent at any time by contacting us by using the contact details provided in the section <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span></span><a data-custom-class="link" href="#contact"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span data-custom-class="body_text">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>"<span class="statement-end-if-in-editor"></span> below<span class="block-component"></span>.</span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">However, please note that this will not affect the lawfulness of the processing before its withdrawal nor,<span class="block-component"></span> when applicable law allows,<span class="statement-end-if-in-editor"></span> will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.<span class="block-component"></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span style="font-size: 15px;"><span data-custom-class="heading_2"><strong></strong></span></span>
                                                                <h3><span style="font-size: 15px;"><strong>Account Information</strong></span></h3><span data-custom-class="body_text"><span style="font-size: 15px;">If you would at any time like to review or change the information in your account or terminate your account, you can:<span class="forloop-component"></span></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span data-custom-class="body_text"><span style="font-size: 15px;"><span class="question">Log in to your account settings and update your user account.</span></span></span></li>
                                                              </ul>
                                                              <div style="line-height: 1.5;">
                                                                <span data-custom-class="body_text"><span style="font-size: 15px;"><span class="forloop-component"></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our legal terms and/or comply with applicable legal requirements.</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="block-component"></span></span></span></span></span></span></span></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><u>Cookies and similar technologies:</u></strong> Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to remove cookies or reject cookies, this could affect certain features or services of our Services. <span class="block-component"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></span></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span data-custom-class="body_text"><span style="font-size: 15px;">If you have questions or comments about your privacy rights, you may email us at <span class="question noTranslate"><a target="_blank" data-custom-class="link" href="mailto:mrshanebarron@gmail.com">mrshanebarron@gmail.com</a></span>.</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="DNT" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>11. CONTROLS FOR DO-NOT-TRACK FEATURES</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (<span class="block-component"></span>"DNT"<span class="statement-end-if-in-editor"></span>) feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage, no uniform technology standard for <span class="block-component"></span>recognizing<span class="statement-end-if-in-editor"></span> and implementing DNT signals has been <span class="block-component"></span>finalized<span class="statement-end-if-in-editor"></span>. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this Privacy Notice.</span></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><br></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">California law requires us to let you know how we respond to web browser DNT signals. Because there currently is not an industry or legal standard for <span class="block-component"></span>recognizing<span class="statement-end-if-in-editor"></span> or <span class="block-component"></span>honoring<span class="statement-end-if-in-editor"></span> DNT signals, we do not respond to them at this time.</span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div id="uslaws" style="line-height: 1.5;">
                                                                <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                <h2><span style="color: rgb(127, 127, 127);"><strong>12. DO UNITED STATES RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:&nbsp;</em></strong><em>If you are a resident of<span class="block-component"></span> California, Colorado, Connecticut, Delaware, Florida, Indiana, Iowa, Kentucky, Maryland, Minnesota, Montana, Nebraska, New Hampshire, New Jersey, Oregon, Rhode Island, Tennessee, Texas, Utah, or Virginia<span class="else-block"></span>, you may have the right to request access to and receive details about the personal information we maintain about you and how we have processed it, correct inaccuracies, get a copy of, or delete your personal information. You may also have the right to withdraw your consent to our processing of your personal information. These rights may be limited in some circumstances by applicable law. More information is provided below.</em></span><strong><span data-custom-class="heading_2"></span></strong></span></span>
                                                                <h3><strong><span data-custom-class="heading_2">Categories of Personal Information We Collect</span></strong></h3><span data-custom-class="body_text">The table below shows the categories of personal information we have collected in the past twelve (12) months. The table includes illustrative examples of each category and does not reflect the personal information we collect from you. For a comprehensive inventory of all personal information we process, please refer to the section <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span><a data-custom-class="link" href="#infocollect"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span data-custom-class="body_text"><span data-custom-class="link">WHAT INFORMATION DO WE COLLECT?</span></span></span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <table style="width: 100%;">
                                                                <thead>
                                                                  <tr>
                                                                    <th style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black; text-align: left;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Category</strong></span></span></span></th>
                                                                    <th style="width: 51.4385%; border-top: 1px solid black; border-right: 1px solid black; text-align: left;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Examples</strong></span></span></span></th>
                                                                    <th style="width: 14.9084%; border-right: 1px solid black; border-top: 1px solid black; text-align: center; text-align: left;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Collected</strong></span></span></span></th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">A. Identifiers</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-top: 1px solid black; border-right: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Contact details, such as real name, alias, postal address, telephone or mobile contact number, unique personal identifier, online identifier, Internet Protocol address, email address, and account name</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; vertical-align: middle; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"><span class="block-component"></span></span>NO<span class="statement-end-if-in-editor"><span class="block-component"></span></span></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                              <div style="line-height: 1.5;">
                                                                <span class="block-component"></span>
                                                              </div>
                                                              <table style="width: 100%;">
                                                                <tbody>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">B. Personal information as defined in the California Customer Records statute</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Name, contact information, education, employment, employment history, and financial information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="forloop-component"><span class="block-component"><span class="block-component">NO<span class="statement-end-if-in-editor"><span class="block-component"></span></span></span></span></span></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                              <div style="line-height: 1.5;">
                                                                <span class="block-component"></span>
                                                              </div>
                                                              <table style="width: 100%;">
                                                                <tbody>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>C<span class="else-block"></span>. Protected classification characteristics under state or federal law</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Gender, age, date of birth, race and ethnicity, national origin, marital status, and other demographic data</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>D<span class="else-block"></span>. Commercial information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Transaction information, purchase history, financial details, and payment information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"><span class="block-component"></span></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>E<span class="else-block"></span>. Biometric information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Fingerprints and voiceprints</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"><span class="block-component">NO</span><span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>F<span class="else-block"></span>. Internet or other similar network activity</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Browsing history, search history, online <span class="block-component"></span>behavior<span class="statement-end-if-in-editor"></span>, interest data, and interactions with our and other websites, applications, systems, and advertisements</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>G<span class="else-block"></span>. Geolocation data</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Device location</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>H<span class="else-block"></span>. Audio, electronic, sensory, or similar information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Images and audio, video or call recordings created in connection with our business activities</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="width: 33.8274%; border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>I<span class="else-block"></span>. Professional or employment-related information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 51.4385%; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Business contact details in order to provide you our Services at a business level or job title, work history, and professional qualifications if you apply for a job with us</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="width: 14.9084%; text-align: center; border-right: 1px solid black; border-top: 1px solid black;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="border-left: 1px solid black; border-right: 1px solid black; border-top: 1px solid black; width: 33.8274%;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>J<span class="else-block"></span>. Education Information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="border-right: 1px solid black; border-top: 1px solid black; width: 51.4385%;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Student records and directory information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="text-align: center; border-right: 1px solid black; border-top: 1px solid black; width: 14.9084%;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span class="forloop-component"><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"></span>NO<span class="statement-end-if-in-editor"></span><span class="block-component"></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="border-width: 1px; border-color: black; border-style: solid; width: 33.8274%;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>K<span class="else-block"></span>. Inferences drawn from collected personal information</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="border-bottom: 1px solid black; border-top: 1px solid black; border-right: 1px solid black; width: 51.4385%;">
                                                                      <div style="line-height: 1.5;">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Inferences drawn from any of the collected personal information listed above to create a profile or summary about, for example, an individual’s preferences and characteristics</span></span></span>
                                                                      </div>
                                                                    </td>
                                                                    <td style="text-align: center; border-right: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black; width: 14.9084%;">
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" style="line-height: 1.5;">
                                                                        <span data-custom-class="body_text"><span class="block-component"></span>NO<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span>
                                                                      </div>
                                                                      <div style="line-height: 1.5;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; line-height: 1.5;"><span data-custom-class="body_text"><span class="block-component"></span>L<span class="else-block"></span>. Sensitive personal Information</span></td>
                                                                    <td style="border-right: 1px solid black; border-bottom: 1px solid black; line-height: 1.5;"><span class="block-component"><span data-custom-class="body_text"></span></span></td>
                                                                    <td style="border-right: 1px solid black; border-bottom: 1px solid black;">
                                                                      <div data-empty="true" style="text-align: center;">
                                                                        <br>
                                                                      </div>
                                                                      <div data-custom-class="body_text" data-empty="true" style="text-align: center; line-height: 1.5;">
                                                                        <span class="block-component"><span data-custom-class="body_text"></span> NO</span> <span class="statement-end-if-in-editor"><span data-custom-class="body_text"></span></span>
                                                                      </div>
                                                                      <div data-empty="true" style="text-align: center;">
                                                                        <br>
                                                                      </div>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                              <div style="line-height: 1.5;">
                                                                <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <br>
                                                              </div>
                                                              <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px;"><span data-custom-class="body_text">We may also collect other personal information outside of these categories through instances where you interact with us in person, online, or by phone or mail in the context of:</span><span class="block-component"></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Receiving help through our customer support channels;<span class="statement-end-if-in-editor"></span></span></li>
                                                              </ul>
                                                              <div>
                                                                <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text"><span style="font-size: 15px;">Participation in customer surveys or contests; and<span class="statement-end-if-in-editor"></span></span></li>
                                                              </ul>
                                                              <div>
                                                                <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                              </div>
                                                              <ul>
                                                                <li data-custom-class="body_text"><span style="font-size: 15px;">Facilitation in the delivery of our Services and to respond to your inquiries.</span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span></li>
                                                              </ul>
                                                              <div style="line-height: 1.5;">
                                                                <span class="block-component"><span data-custom-class="body_text"></span></span>
                                                                <div style="line-height: 1.5;">
                                                                  <strong><span style="font-size: 15px;"><span data-custom-class="heading_2"></span></span></strong>
                                                                  <h3><strong><span style="font-size: 15px;">Sources of Personal Information</span></strong></h3><span style="font-size: 15px;"><span data-custom-class="body_text">Learn more about the sources of personal information we collect in <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span><span style="color: rgb(0, 58, 250);"><span data-custom-class="body_text"><a data-custom-class="link" href="#infocollect"><span style="color: rgb (0, 58, 250); font-size: 15px;">WHAT INFORMATION DO WE COLLECT?</span></a></span></span><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span>"</span><span class="statement-end-if-in-editor"><span data-custom-class="body_text"></span></span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><strong><span data-custom-class="heading_2"></span></strong></span></span>
                                                                  <h3><span style="font-size: 15px; color: rgb(89, 89, 89);"><strong>How We Use and Share Personal Information</strong></span></h3><span data-custom-class="body_text" style="font-size: 15px;"><span class="block-component"></span>Learn more about how we use your personal information in the section, <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span><a data-custom-class="link" href="#infouse"><span style="color: rgb(0, 58, 250); font-size: 15px;">HOW DO WE PROCESS YOUR INFORMATION?</span></a><span data-custom-class="body_text" style="font-size: 15px;"><span class="block-component"></span>"</span> <span class="statement-end-if-in-editor"><span data-custom-class="body_text" style="font-size: 15px;"></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Will your information be shared with anyone else?</strong></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may disclose your personal information with our service providers pursuant to a written contract between us and each service provider. Learn more about how we disclose personal information to in the section, <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span></span><a data-custom-class="link" href="#whoshare"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span style="font-size: 15px; color: rgb(0, 58, 250);">WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may use your personal information for our own business purposes, such as for undertaking internal research for technological development and demonstration. This is not considered to be <span class="block-component"></span>"selling"<span class="statement-end-if-in-editor"></span> of your personal information.<span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We have not disclosed, sold, or shared any personal information to third parties for a business or commercial purpose in the preceding twelve (12) months. We<span style="color: rgb(89, 89, 89);">&nbsp;</span>will not sell or share personal information in the future belonging to website visitors, users, and other consumers.<span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"></span></span></span></span></span><span class="block-component"></span></span></span></span></span></span> <span data-custom-class="body_text"><span style="color: rgb(0, 0, 0);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><strong><span data-custom-class="heading_2"></span></strong></span>
                                                                  <h3><span style="font-size: 15px;"><strong>Your Rights</strong></span></h3><span data-custom-class="body_text">You have rights under certain US state data protection laws. However, these rights are not absolute, and in certain cases, we may decline your request as permitted by law. These rights include:</span><span class="block-component"></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to know</strong> whether or not we are processing your personal data<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to access&nbsp;</strong>your personal data<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to correct&nbsp;</strong>inaccuracies in your personal data<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to request</strong> the deletion of your personal data<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to obtain a copy&nbsp;</strong>of the personal data you previously shared with us<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to non-discrimination</strong> for exercising your rights<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;"><strong>Right to opt out</strong> of the processing of your personal data if it is used for targeted advertising<span class="block-component"></span> (or sharing as defined under California’s privacy law)<span class="statement-end-if-in-editor"></span>, the sale of personal data, or profiling in furtherance of decisions that produce legal or similarly significant effects (<span class="block-component"></span>"profiling"<span class="statement-end-if-in-editor"></span>)<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span data-custom-class="body_text">Depending upon the state where you live, you may also have the following rights:</span><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Right to access the categories of personal data being processed (as permitted by applicable law, including the privacy law in Minnesota)<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Right to obtain a list of the categories of third parties to which we have disclosed personal data (as permitted by applicable law, including the privacy law in<span class="block-component"></span> California, Delaware, and Maryland<span class="else-block"></span><span class="block-component"></span>)<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Right to obtain a list of specific third parties to which we have disclosed personal data (as permitted by applicable law, including the privacy law in<span class="block-component"></span> Minnesota and Oregon<span class="else-block"></span>)</span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="block-component"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Right to review, understand, question, and correct how personal data has been profiled (as permitted by applicable law, including the privacy law in Minnesota)<span class="statement-end-if-in-editor"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Right to limit use and disclosure of sensitive personal data (as permitted by applicable law, including the privacy law in California)</span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                                </div>
                                                                <ul>
                                                                  <li data-custom-class="body_text" style="line-height: 1.5;"><span style="font-size: 15px;">Right to opt out of the collection of sensitive data and personal data collected through the operation of a voice or facial recognition feature (as permitted by applicable law, including the privacy law in Florida)</span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span><strong><span style="font-size: 15px;"><span data-custom-class="heading_2"></span></span></strong>
                                                                  <h3><strong><span style="font-size: 15px;">How to Exercise Your Rights</span></strong></h3><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">To exercise these rights, you can contact us <span class="block-component"></span>by submitting a&nbsp;</span></span></span><a data-custom-class="link" href="https://app.termly.io/dsar/5e20aaa5-fbe0-4cd3-9a4a-953179d879ab" rel="noopener noreferrer" target="_blank"><span style="font-size: 15px; color: rgb(0, 58, 250);"><span style="font-size: 15px; color: rgb(0, 58, 250);">data subject access request</span></span></a><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">, <span class="block-component"></span></span><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span>by emailing us at <span class="question"><a target="_blank" data-custom-class="link" href="mailto:mrshanebarron@gmail.com">mrshanebarron@gmail.com</a></span>, <span class="statement-end-if-in-editor"></span><span class="block-component"></span></span><span data-custom-class="body_text"><span class="block-component"></span><span class="block-component"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span></span></span></span> <span data-custom-class="body_text">or by referring to the contact details at the bottom of this document.</span> <span class="block-component"><span style="font-size: 15px;"></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span data-custom-class="body_text">Under certain US state data protection laws, you can designate an <span class="block-component"></span>authorized<span class="statement-end-if-in-editor"></span> agent to make a request on your behalf. We may deny a request from an <span class="block-component"></span>authorized<span class="statement-end-if-in-editor"></span> agent that does not submit proof that they have been validly <span class="block-component"></span>authorized<span class="statement-end-if-in-editor"></span> to act on your behalf in accordance with applicable laws.</span><br>
                                                                  <strong><span data-custom-class="heading_2"></span></strong></span>
                                                                  <h3><strong><span data-custom-class="heading_2">Request Verification</span></strong></h3><span data-custom-class="body_text">Upon receiving your request, we will need to verify your identity to determine you are the same person about whom we have the information in our system. We will only use personal information provided in your request to verify your identity or authority to make the request. However, if we cannot verify your identity from the information already maintained by us, we may request that you provide additional information for the purposes of verifying your identity and for security or fraud-prevention purposes.</span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><br></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span data-custom-class="body_text">If you submit the request through an <span class="block-component"></span>authorized<span class="statement-end-if-in-editor"></span> agent, we may need to collect additional information to verify your identity before processing your request and the agent will need to provide a written and signed permission from you to submit such request on your behalf.</span></span> <span class="block-component"><span style="font-size: 15px;"></span></span> <span style="font-size: 15px;"><span data-custom-class="heading_2"><strong></strong></span></span>
                                                                  <h3><span style="font-size: 15px;"><strong>Appeals</strong></span></h3><span data-custom-class="body_text">Under certain US state data protection laws, if we decline to take action regarding your request, you may appeal our decision by emailing us at <span class="block-component"></span><span class="question noTranslate"><a target="_blank" data-custom-class="link" href="mailto:mrshanebarron@gmail.com">mrshanebarron@gmail.com</a></span><span class="else-block"></span>. We will inform you in writing of any action taken or not taken in response to the appeal, including a written explanation of the reasons for the decisions. If your appeal is denied, you may submit a complaint to your state attorney general.</span><span class="statement-end-if-in-editor"></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"><span class="block-component"></span></span></span></span></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span> <span style="font-size: 15px;"><strong><span data-custom-class="heading_2"></span></strong></span>
                                                                  <h3><span style="font-size: 15px;"><strong>California <span class="block-component"></span>"Shine The Light"<span class="statement-end-if-in-editor"></span> Law</strong></span></h3><span data-custom-class="body_text">California Civil Code Section 1798.83, also known as the <span class="block-component"></span>"Shine The Light"<span class="statement-end-if-in-editor"></span> law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us by using the contact details provided in the section <span class="block-component"></span>"<span class="statement-end-if-in-editor"></span></span><span data-custom-class="body_text"><a data-custom-class="link" href="#contact"><span style="color: rgb(0, 58, 250); font-size: 15px;">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></a></span><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"></span>"</span><span class="statement-end-if-in-editor"><span data-custom-class="body_text"></span></span></span> <span class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></span> <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span> <span class="block-component"><span style="font-size: 15px;"></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div id="policyupdates" style="line-height: 1.5;">
                                                                  <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                  <h2><span style="color: rgb(127, 127, 127);"><strong>13. DO WE MAKE UPDATES TO THIS NOTICE?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><em><strong>In Short:&nbsp;</strong>Yes, we will update this notice as necessary to stay compliant with relevant laws.</em></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may update this Privacy Notice from time to time. The updated version will be indicated by an updated <span class="block-component"></span>"Revised"<span class="statement-end-if-in-editor"></span> date at the top of this Privacy Notice. If we make material changes to this Privacy Notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this Privacy Notice frequently to be informed of how we are protecting your information.</span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div id="contact" style="line-height: 1.5;">
                                                                  <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                  <h2><span style="color: rgb(127, 127, 127);"><strong>14. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you have questions or comments about this notice, you may <span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"><span class="block-component"></span></span>email us at <span class="question noTranslate"><a target="_blank" data-custom-class="link" href="mailto:mrshanebarron@gmail.com">mrshanebarron@gmail.com</a> or&nbsp;</span><span class="statement-end-if-in-editor"><span class="block-component"></span></span></span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">contact us by post at:</span></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="question noTranslate">Shane Barron</span></span></span></span></span></span><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="question noTranslate">2810 Jerry Smith Rd, Dover, FL 33527, USA</span><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span class="block-component"></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span style="font-size: 15px;"><span data-custom-class="body_text"><span class="question">Dover</span><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span class="block-component"></span><span class="block-component"></span>, <span class="question noTranslate">FL</span><span class="statement-end-if-in-editor"></span><span class="block-component"></span><span class="block-component"></span> <span class="question noTranslate">33527</span><span class="statement-end-if-in-editor"></span><span class="block-component"></span><span class="block-component"></span><span class="block-component"></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <span data-custom-class="body_text" style="font-size: 15px;"><span class="question noTranslate">United States<span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span></span></span></span></span></span></span></span></span></span></span> <span class="block-component"><span style="font-size: 15px;"><span data-custom-class="body_text"></span></span></span> <span class="statement-end-if-in-editor"></span> <span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span class="statement-end-if-in-editor"></span></span></span></span> <span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span class="statement-end-if-in-editor"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="block-component"><span class="block-component"></span></span></span></span></span></span></span><span class="block-component"><span style="font-size: 15px;"></span></span><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span data-custom-class="body_text"><span class="statement-end-if-in-editor"><span class="block-component"></span></span></span></span></span></span></span></span></span></span>
                                                                </div>
                                                                <div style="line-height: 1.5;">
                                                                  <br>
                                                                </div>
                                                                <div id="request" style="line-height: 1.5;">
                                                                  <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1"></span></strong></span></span></span></span></span>
                                                                  <h2><span style="color: rgb(127, 127, 127);"><strong>15. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</strong></span></h2><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span class="block-component"></span></span> You have the right to request access to the personal information we collect from you, details about how we have processed it, correct inaccuracies, or delete your personal information. You may also have the right to <span class="block-component"></span>withdraw your consent to our processing of your personal information. These rights may be limited in some circumstances by applicable law. To request to review, update, or delete your personal information, please <span class="block-component"></span>fill out and submit a&nbsp;</span><span style="color: rgb(0, 58, 250);"><span data-custom-class="body_text"><span style="color: rgb(0, 58, 250); font-size: 15px;"><a data-custom-class="link" href="https://app.termly.io/dsar/5e20aaa5-fbe0-4cd3-9a4a-953179d879ab" rel="noopener noreferrer" target="_blank">data subject access request</a></span></span></span><span class="block-component"><span data-custom-class="body_text"></span></span></span><span data-custom-class="body_text">.</span>
                                                                </div>
                                                              </div>
                                                            </div>@endsection
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
