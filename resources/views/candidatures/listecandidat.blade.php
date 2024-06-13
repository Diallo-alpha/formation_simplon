<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid" style="margin-top: 10px">
  <div class="table-row header">
    <div class="column index">#</div>
    <div class="wrapper attributes">
      <div class="wrapper title-comment-module-reporter">
        <div class="wrapper title-comment">
          <div class="column title">Title</div>
          <div class="column comment">Comment</div>
        </div>
        <div class="wrapper module-reporter">
          <div class="column module">Module</div>
          <div class="column reporter">Reporter</div>
        </div>
      </div>
      <div class="wrapper status-owner-severity">
        <div class="wrapper status-owner">
          <div class="column status">Status</div>
          <div class="column owner">Owner</div>
        </div>
        <div class="column severity">Severity</div>
      </div>
    </div>
    <div class="wrapper icons">
      <div title="Watch" class="column watch">
        <span class="glyphicon glyphicon-eye-open"></span>
      </div>
      <div title="Add comment" class="column add-comment">
        <span class="glyphicon glyphicon-comment"></span>
      </div>
    </div>
    <div class="wrapper dates">
      <div class="column date">Created</div>
      <div class="column date">Updated</div>
      <div class="column date">Due</div>
    </div>
  </div>

  <div class="table-row">
    <div class="column index">1</div>
    <div class="wrapper attributes">
      <div class="wrapper title-comment-module-reporter">
        <div class="wrapper title-comment">
          <div class="column title">App crashes when dragged by title bar</div>
          <div class="column comment">Eddie, can you please take a look. We want this fixed pretty soon.</div>
        </div>
        <div class="wrapper module-reporter">
          <div class="column module">Main App</div>
          <div class="column reporter">Ravan</div>
        </div>
      </div>
      <div class="wrapper status-owner-severity">
        <div class="wrapper status-owner">
          <div class="column status"><span class="label label-primary">Open</span></div>
          <div class="column owner">Eddie</div>
        </div>
        <div class="column severity high">High</div>
      </div>
    </div>
    <div class="wrapper icons">
      <div class="column watch"><span class="glyphicon glyphicon-eye-open active" /></div>
      <div class="column add-comment"><span class="glyphicon glyphicon-comment" /></div>
    </div>
    <div class="wrapper dates">
      <div class="column date">Feb-1, 2016</div>
      <div class="column date">Mar-13, 2016</div>
      <div class="column date">Apr-4, 2016</div>
    </div>
  </div>

  <div class="table-row">
    <div class="column index">2</div>
    <div class="wrapper attributes">
      <div class="wrapper title-comment-module-reporter">
        <div class="wrapper title-comment">
          <div class="column title">Unable to save the data when using Enter key instead of clicking on submit button.</div>
          <div class="column comment">Let me take this up.</div>
        </div>
        <div class="wrapper module-reporter">
          <div class="column module">Save Screen</div>
          <div class="column reporter">Kiran</div>
        </div>
      </div>
      <div class="wrapper status-owner-severity">
        <div class="wrapper status-owner">
          <div class="column status"><span class="label label-primary">Open</span></div>
          <div class="column owner">Vasan</div>
        </div>
        <div class="column severity medium">Medium</div>
      </div>
    </div>
    <div class="wrapper icons">
      <div class="column watch"><span class="glyphicon glyphicon-eye-open active" /></div>
      <div class="column add-comment"><span class="glyphicon glyphicon-comment active" /></div>
    </div>
    <div class="wrapper dates">
      <div class="column date">Mar-3, 2016</div>
      <div class="column date">Apr-4, 2016</div>
      <div class="column date">May-15, 2016</div>
    </div>
  </div>

  <div class="table-row">
    <div class="column index">3</div>
    <div class="wrapper attributes">
      <div class="wrapper title-comment-module-reporter">
        <div class="wrapper title-comment">
          <div class="column title">Improper alignment in Export section</div>
          <div class="column comment">Hey, I am not able to reproduct this. Can you please attach a screenshot?</div>
        </div>
        <div class="wrapper module-reporter">
          <div class="column module">Exports</div>
          <div class="column reporter">Ravan</div>
        </div>
      </div>
      <div class="wrapper status-owner-severity">
        <div class="wrapper status-owner">
          <div class="column status"><span class="label label-success">In Progress</span></div>
          <div class="column owner">Pieta</div>
        </div>
        <div class="column severity low">Low</div>
      </div>
    </div>
    <div class="wrapper icons">
      <div class="column watch"><span class="glyphicon glyphicon-eye-open" /></div>
      <div class="column add-comment"><span class="glyphicon glyphicon-comment active" /></div>
    </div>
    <div class="wrapper dates">
      <div class="column date">Apr-14, 2016</div>
      <div class="column date">May-5, 2016</div>
      <div class="column date">Jun-6, 2016</div>
    </div>
  </div>

</div>
<style>
 Main container - row container
.table-row {
  display: flex;          display: -webkit-flex;
  flex-direction: row;    -webkit-flex-direction: row;
  flex-wrap: no-wrap;     -webkit-flex-wrap: no-wrap;
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

// Wrappers around cells and other wrappers
.wrapper {
  display: flex; display: -webkit-flex;
  flex-direction: row; -webkit-flex-direction: row;
}

// leaf level containers (cells): common properties 
.column {
  flex-grow: 0; -webkit-flex-grow: 0;
  flex-shrink: 0; -webkit-flex-shrink: 0;
  vertical-align: top;
}

// leaf level containers (cells): special properties 
.index {
  text-align: center;
}

.title {
  font-weight: bold;
  color: #337AB5;
}

.comment {
  width: @comment-width;
}

// these are growable text containers, with ellipsis to show truncated text
.title, .comment {
  flex-grow: 1; -webkit-flex-grow: 1;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  padding-right: 4px;
}

.date {
  width: @date-width;
  text-align: right;
  padding-right: 4px;
}

/* growable wrappers */
.title-comment, .title-comment-module-reporter, .attributes {
  flex-grow: 1; -webkit-flex-grow: 1;
}

.table-row {
  border-bottom: 1px solid #e0e0e0;
  border-collapse: collapse;
  padding-top: 2px;
}

.table-row.header {
  background-color: #FFEEDB;
  font-weight: bold;
  padding-top: 6px;
  padding-bottom: 6px;
}

.glyphicon {
  color: #DDDDDD;
}

.header .glyphicon {
  color: #333
}

.glyphicon-eye-open.active {
  color: blue;
}

.glyphicon-comment.active {
  color: #3EBB0D;
}

.glyphicon:hover {
  color: #666;
  cursor: pointer;
  text-decoration: underline;
}

.reporter {
  color: #999999;
}
.comment {
  font-style: italic;
}

.severity.high { color: red; }
.severity.medium { color: blue; }
.severity.low { color: green; }

</style>
</body>
</html>