<template>
  <div class="card">
    <router-link :to="{name: 'Shot' , params:{id:post.id}}" class="body" :style="{backgroundImage:`url(${post.image})`}">
      <div class="type"></div>

      <div class="overlay">
        <div class="title">{{ post.title }}</div>

        <div class="btns">
          <div class="save"></div>
          <div class="like"></div>
        </div>
      </div>
    </router-link>

    <div class="footer">
      <div class="user">
        <div class="avatar"></div>
        <div class="name">{{ post.user.name }}</div>
        <div class="label">{{ post.user.type }}</div>
      </div>

      <div class="stat">
        <div class="like">
          <div class="icon"></div>
          <div class="num"></div>
        </div>

        <div class="view">
          <div class="icon"></div>
          <div class="num"></div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "Card",
  props: ["post"],
};
</script>

<style lang="scss" scoped>
.card {
  width: 290px;
  height: 240px;
  display: flex;
  flex-direction: column;

  .body {
    position: relative;
    flex-grow: 1;
    border-radius: 8px;
    background: url(https://cdn.dribbble.com/users/1615730/screenshots/15642543/media/fd6cc8b632e2ab050a642d53cf7d482e.png?compress=1&resize=400x300);
    background-size: cover;
    display: block;

    .type {
      width: 24px;
      height: 24px;
      position: absolute;
      top: 12px;
      right: 12px;
      background: red;
    }

    .overlay {
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 75px;
      background: linear-gradient(
        0deg,
        rgba(0, 0, 0, 0.3) 0%,
        rgba(0, 0, 0, 0.302608543417367) 64%,
        rgba(0, 0, 0, 0) 93%
      );
      opacity: 0;
      transition: opacity 0.3s;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      border-radius: 0 0 8px 8px;

      .title {
        font-size: 16px;
        line-height: 22px;
        font-weight: 500;
        color: #fff;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
      }

      .btns {
        display: flex;

        .save,
        .like {
          width: 34px;
          height: 34px;
          border-radius: 8px;
          background: #EEE;
          margin-left: 12px;
        }
      }
    }

    &:hover .type {
      opacity: 0;
    }

    &:hover .overlay {
      opacity: 1;
    }
  }

  .footer {
    flex-basis: 33px;
    height: 34px;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;

    .user {
      display: flex;
      align-items: center;

      .avatar {
        width: 24px;
        height: 24px;
        background: #000;
        border-radius: 50%;
      }

      .name {
        margin-left: 8px;
      }

      .label {
        padding: 2px 3px;
        background: #ccc;
        border-radius: 3px;
        font-size: 10px;
        font-weight: 700;
        color: #fff;
        margin-left: 8px;

        &:hover {
          background: #ea4c89;
        }
      }
    }

    .stat {
    }
  }
}
</style>